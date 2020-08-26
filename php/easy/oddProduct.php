<?php
function oddProduct($arr) {
    $storArr = array();
   foreach($arr as &$value){
    if ($value % 2 != 0){
      array_push($storArr,$value);
    }
   }
   return array_product($storArr);
}


echo oddProduct([3, 4, 1, 1, 5]) . "\n"


?>
