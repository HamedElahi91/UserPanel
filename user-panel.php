<?php
/*
* Plugin Name:        user-panel
 * Plugin URI:        https://egeekbin.com
 * Description:       This Plugin provide a custom user profile and user panel.
 * Version:           1.0.0
 * Author:            Hamed Elahi
 * Author URI:        https://egeekbin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       user-panel
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class UserPanel{
      public function __construct()
      {
            $this->define_contants();
            $this->init();

      }

      public function define_contants(){
            define('UP_DIR', plugin_dir_path(__FILE__));
            define('UP_URL', plugin_dir_url(__FILE__));
      }

      public function init(){
            register_activation_hook(__FILE__, [$this, 'activation']);
            register_deactivation_hook(__FILE__, [$this, 'deactivation']);
            $this->start_router();
      }

      public function activation(){

      }

      public function deactivation(){

      }

      private function start_router(){
            include "router.php";
            new Router;
      }

}
new UserPanel;