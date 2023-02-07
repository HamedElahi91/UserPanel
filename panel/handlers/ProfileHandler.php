<?php
include "Handler.php";
include_once UP_DIR . "/view.class.php";
include_once UP_DIR . "/panel/flash.class.php";
class ProfileHandler extends Handler{
      public function __construct()
      {
            parent::__construct();
            add_action('up_update_profile', [$this, 'update_user_profile']);
      }
      public function index(){
            if(isset($_POST["saveData"])){
                  do_action('up_update_profile');
            }
            $message = FlashMessage::get();
            $params = [
                  'current_user' => $this->current_user,
                  'message' => $message
            ];
            View::load('panel.profile.index', $params);
      }

      public function update_user_profile(){
            $user_data_for_update = [
                  'ID' => $this->current_user->ID,
                  'display_name' => apply_filters('pre_user_display_name', $_POST["InputFullName"])
            ];
            
            if(!empty($_POST["InputPassword"])){
                  $user_data_for_update['user_pass'] = apply_filters('pre_user_pass', $_POST["InputPassword"]);
            }
            $update_result = wp_update_user($user_data_for_update);
            if(!is_wp_error($update_result)){
                  FlashMessage::add('اطلاعات شما با موفقیت به روز رسانی شد.');
            }else{
                  FlashMessage::add('متاسفانه به روزرسانی با مشکل مواجه شده است.', 2);                  
            }
      }
}