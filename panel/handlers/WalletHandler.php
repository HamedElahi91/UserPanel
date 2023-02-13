<?php
include_once "Handler.php";
include_once UP_DIR . "/view.class.php";
include_once UP_DIR . "/services/user.service.php";
include_once UP_DIR . "utility/currency.class.php";

class WalletHandler extends Handler{
      public function __construct()
      {
            parent::__construct();
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
            View::load('panel.wallet.payForWallet');
      }
}