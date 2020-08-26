<?php
function countOnes($i) {
  return substr_count(strval(decbin($i)),1);
	}


echo countOnes(100) . "\n";

?>
