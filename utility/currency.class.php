<?php
include_once "lang.class.php";
class Currency {
      public function convert_to_thosand_toman($value){
      return $value / 1000;
      }
      public function convert_to_rial($value){
      return $value * 10;
      }

      public function format_hezar_toman($value){
            $lang = new Lang();
            return $lang->convert_to_persian(number_format($this->convert_to_thosand_toman($value))) . ' هزار تومان ';
      }
      public function format_toman($value){
            $lang = new Lang();
            return $lang->convert_to_persian(number_format($value)) . ' تومان ';
      }
      public function format_rial($value){
            $lang = new Lang();
            return $lang->convert_to_persian(number_format($this->convert_to_rial($value))) . ' ریال ';
      }
}