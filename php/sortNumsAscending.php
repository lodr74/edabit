<?php
function sortNumsAscending($arr) {
    if (empty($arr)){
      $arr = array();
      return $arr;
    }else
      sort($arr);
      return $arr;
    }

$newArr = sortNumsAscending([10,42,1,3,5,6]);
print_r($newArr);


?>
