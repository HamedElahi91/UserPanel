<?php

class Router{
      public function __construct()
      {
            add_action('init', [$this, 'hamdle_routes']);
      }

      public function hamdle_routes(){

            $request_uri = $_SERVER['REQUEST_URI'];
            $this->dispatch_request($request_uri);
      }
      private function dispatch_request($request_uri){
            if( false == strpos($request_uri, 'dashboard')){
                  return;
            }
            $handler = $this->parse_uri($request_uri);
            $handler_name = $this->format_handler_name($handler);
            if (!$this->is_hanler_valid($handler_name)){
                  
                  throw new Exception('request handler isn\'t valid ');
            }
            $handler_path = $this->get_handler_file($handler_name);
            include_once $handler_path;
            new $handler_name;
            exit;
      }

      private function is_hanler_valid($handler)
      {
            $handler_file_path = $this->get_handler_file($handler);
            return file_exists($handler_file_path) && is_readable($handler_file_path);
      }

      private function get_handler_file($handler){
            $handler_file_path = UP_DIR.DIRECTORY_SEPARATOR.'panel/handlers/'.$handler.'.php';
            return $handler_file_path;
      }
      private function parse_uri($uri)
      {
            $uri_parts = explode('/', strtok($uri , "?") );
            if (empty(end($uri_parts))){
                  return $uri_parts[count($uri_parts)-2];
            }
            return end($uri_parts);
      }

      private function format_handler_name($handler){
            $formatted_handler = ucfirst($handler) . 'Handler';
            return $formatted_handler;
      }
}