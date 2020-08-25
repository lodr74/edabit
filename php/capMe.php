<?php
function capMe($arr) {
  foreach ($arr as &$value){
      $value = ucfirst(strtolower($value));
  }
  return $arr;
}

print_r(capMe(['mavis', 'senaida', 'letty'])) . "\n";
?>
