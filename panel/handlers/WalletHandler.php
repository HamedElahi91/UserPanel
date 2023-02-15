<?php
include_once "Handler.php";
include_once UP_DIR . "/view.class.php";
include_once UP_DIR . "/services/user.service.php";
include_once UP_DIR . "/services/payment.service.php";
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
            $payment_service = new PaymentService;
            $amount = intval($_POST['amount']);
            $callback_url= home_url('/dashboard/wallet?action=verifyPayment');

            $payment_service->request_payment([
                  'amount' => $amount,
                  'callback' => $callback_url,
                  'description' => sprintf('افزایش موجودی حساب کاربری به مبلغ:', $amount)
            ]);
      }

      public function verifyPayment(){
            $payment_service = new PaymentService;
            $user_service = new UserService();
            [$status, $result] = $payment_service->verify_payment();
            if($status){
                  $user_service->increase_user_wallet($this->current_user->ID, (int)$_SESSION['up_amount']);
            }
            View::load('panel.wallet.verifyPayment', compact('status','result'));
      }
}