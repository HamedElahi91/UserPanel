<?php
include_once "Handler.php";
include_once UP_DIR . "/view.class.php";
include_once UP_DIR . "/services/user.service.php";
include_once UP_DIR . "/services/payment.service.php";
include_once UP_DIR . "/services/transaction.service.php";
include_once UP_DIR . "utility/currency.class.php";

class WalletHandler extends Handler{
      public function __construct()
      {
            parent::__construct();
            add_action('up_start_wallet_payment', [$this, 'start_payment']);
      }
      public function index(){
            if($this->hasAction()){
                  $this->performAction();
                  return;
            }
           
            $user_service = new UserService();
            $currency = new Currency;
            
            $user_wallet = $currency->format_toman($user_service->get_user_wallet($this->current_user->ID));
            
            View::load('panel.wallet.index',compact('user_wallet'));
      }

      public function payForWallet(){
            if(isset($_POST['startPayment'])){
                  do_action('up_start_wallet_payment');
            }
            View::load('panel.wallet.payForWallet');
      }

      public function start_payment(){
            $payment_service = new PaymentService();
            $transaction_service = new TransactionServices();
            
            $amount = intval($_POST['amount']);
            $callback_url= home_url('/dashboard/wallet?action=verifyPayment');
            
            $transaction_ID = $transaction_service->create([
                  'user_id' => $this->current_user->ID,
                  'amount' => $_POST['amount'],
                  'res_num' => $transaction_service->generate_res_num($this->current_user->ID)

            ]);

            if(intval($transaction_ID > 0 )){
                  $_SESSION['up_transaction_id'] = $transaction_ID;
                  $payment_service->request_payment([
                        'amount' => $amount,
                        'callback' => $callback_url,
                        'description' => sprintf('افزایش موجودی حساب کاربری به مبلغ:', $amount)
                  ]);
            }

            
      }

      public function verifyPayment(){
            $payment_service = new PaymentService();
            $transaction_service = new TransactionServices();
            $user_service = new UserService();
            [$status, $result] = $payment_service->verify_payment();
            if($status){
                  $user_service->increase_user_wallet($this->current_user->ID, (int)$_SESSION['up_amount']);
            }
            $transaction_service->update_transaction([
                  'ref_num' => $status ? $result : null,
                  'paid_at' => $status ? date('Y-m-d H:i:s') : null,
                  'error' => !$status ? $result : null,
                  'status' => $status ? 1 : 0
            ], [
                  'id' => $_SESSION['up_transaction_id']
            ]);
            View::load('panel.wallet.verifyPayment', compact('status','result'));
      }

      public function transactions(){
            $TransactionServices = new TransactionServices();
            $transactions = $TransactionServices->all($this->current_user->ID);
            View::load('panel.wallet.transactions', compact('transactions'));
      }
}