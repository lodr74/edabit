<?php
function getAbsSum($arr) {
  foreach($arr as &$value){
    $value = abs($value);
  }
  return array_sum($arr);
}


echo getAbsSum([2, -1, -3, 4, 8], 18]) . "\n";

?>
