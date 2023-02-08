<?php
class UserService{

      public function get_user_wallet($user_id){
            return (int) get_user_meta($user_id, 'up_wallet',true);
      }
}