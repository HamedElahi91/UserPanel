<?php
abstract class Handler{
      protected $current_user;
      public function __construct()
      {
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
      abstract protected function index();
}