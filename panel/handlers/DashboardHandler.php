<?php
include "Handler.php";
include UP_DIR . "/view.class.php";
class DashboardHandler extends Handler{
      public function __construct()
      {
            parent::__construct();
      }

      public function index(){
            $params = [
                  'current_user' => $this->current_user,
                  'user_post_count' => count_user_posts($this->current_user->ID) ,
                  'user_comments_count' => $this->get_user_comments_count($this->current_user->ID) 
            ];
            View::load('panel.dashboard.index', $params);
      }
      
      private function get_user_comments_count($user_id){
            global $wpdb;
            $user_comments_count = $wpdb->get_var($wpdb->prepare("
                  SELECT COUNT(comment_ID)
                  FROM {$wpdb->prefix}comments
                  WHERE user_id=%d
                  AND comment_approved = 1
            ", $user_id));

            return intval($user_comments_count);
      }
}