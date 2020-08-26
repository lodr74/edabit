<?php
function MultiplyByLength($arr) {
	$x = sizeof($arr);
	foreach ($arr as &$value){
		$value = $value*$x;
	}
	return $arr;
}

echo MultiplyByLength([2,6,4,9]) . "\n";
?>