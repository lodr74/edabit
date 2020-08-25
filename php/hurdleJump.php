<?php
function hurdleJump($hurdles, $jumpHeight) {
  $arr = array();
  for($i=0;$i<sizeof($hurdles);$i++){
      if($jumpHeight >= $hurdles[$i]){
        array_push($arr,true);
      }else{
      array_push($arr,false);
      }
  }
  if(in_array(false,$arr)){
  return false;
  }else{
  return true;
  }
}

echo hurdleJump([1,5,4,6],6) . "\n";

?>
