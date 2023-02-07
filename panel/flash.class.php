<?php

class FlashMessage{
      const SUCCESS = 1;
      const ERROR = 2;

      public static function add($message, $type = self::SUCCESS){

                  $_SESSION['up_messages']=[
                        'message' => $message,
                        'type' => $type
                  ];

      }
      public static function show(){
            if(isset($_SESSION['up_messages'])){
                  $message = $_SESSION['up_messages'];
                  if($message['type'] == self::SUCCESS){
                        echo '<div class="alert alert-success"><p>' . $message['message'] . '</div>';
                  }else{
                        echo '<div class="alert alert-danger"><p>' . $message['message'] . '</div>';
                  }

                  self::clear();
            }
      }
      public static function get(){
            $html_message='';
            if(isset($_SESSION['up_messages'])){
                  $message = $_SESSION['up_messages'];
                  if($message['type'] == self::SUCCESS){
                        $html_message= '<div class="alert alert-success alert-dismissible" role="alert">' . $message['message'] . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button></div>';
                  }else{
                        $html_message= '<div class="alert alert-danger alert-dismissible" role="alert">' . $message['message'] . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button></div>';
                  }

                  self::clear();
            }
            return $html_message;
      }
      public static function clear(){
            $_SESSION['up_messages'] = null;
      }
}