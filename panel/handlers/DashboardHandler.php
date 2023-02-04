<?php
include "Handler.php";
include UP_DIR . "/view.class.php";
class DashboardHandler extends Handler{
      public function __construct()
      {

      }

      public function index(){
            View::load('panel/dashboard/index.php',[
                  'name' => 'حامد الهی'
            ]);
      }
}