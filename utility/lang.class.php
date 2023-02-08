<?php
class Lang {
      public function convert_to_persian($input){
            $fa_numbers = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
            $en_numbers = ['0','1','2','3','4','5','6','7','8','9'];
            return str_replace($en_numbers, $fa_numbers, $input);
      }
}