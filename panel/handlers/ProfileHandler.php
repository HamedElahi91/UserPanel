<?php
include "Handler.php";
include UP_DIR . "/view.class.php";
class ProfileHandler extends Handler{
      public function __construct()
      {
           
      }
      public function index(){
            View::load('panel.profile.index',[
                  'name' => 'حامد الهی'
            ]);
      }
}