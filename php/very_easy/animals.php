<?php
function animals($chickens, $cows, $pigs) {
	return ($chickens *2) + (($cows + $pigs) * 4);
}

echo animals(10,20,32) . "\n";

?>
