<?php
abstract class Handler{
      protected $current_user;
      public function __construct()
      {
            $this->current_user = wp_get_current_user();
      }
      abstract protected function index();
}