<?php
abstract class Handler{
      protected $current_user;
      public function __construct()
      {
            $this->check_user_auth();
            $this->current_user = wp_get_current_user();
      }
      protected function performAction(){
            $action = $this->getAction();
            $this->{$action}();
      }

      protected function hasAction(){
            $action = $this->getAction();
            return !is_null($action) && method_exists($this, $action);
      }

      protected function getAction(){
           
            return isset($_GET['action']) && !empty($_GET['action']) ? $_GET['action'] : null;
            
      }

      public function check_user_auth(){
            if(!is_user_logged_in()){
                  wp_die('شما اجازه دسترسی ندارید.');
            }
      }

      abstract protected function index();
}