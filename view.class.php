<?php

class View{
      public static function load($view, $data=[], $layout='default'){
            
            $layout_path = UP_VIEWS.DIRECTORY_SEPARATOR.'layouts/';
            $layout_file_path = $layout_path . $layout . '.php';
            if(file_exists($layout_file_path) && is_readable($layout_file_path)){
                  extract($data);
                  include $layout_file_path;
            }
           
            
      }
}