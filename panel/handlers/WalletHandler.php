<?php
include "Handler.php";
include UP_DIR . "/view.class.php";

class WalletHandler extends Handler{
      public function __construct()
      {

      }
      public function index(){
            View::load('panel.wallet.index',[
                  'name' => 'حامد الهی'
            ]);
      }
}