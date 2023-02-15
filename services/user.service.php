<?php
class UserService{

      public function get_user_wallet($user_id){
            return (int) get_user_meta($user_id, 'up_wallet',true);
      }

      public function increase_user_wallet($user_id, $amount){
            $current_wallet = $this->get_user_wallet($user_id);
            $final_wallet = $current_wallet + $amount;
            update_user_meta($user_id, 'up_wallet', $final_wallet);
      }
}