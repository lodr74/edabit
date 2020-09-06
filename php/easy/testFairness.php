<?php
function testFairness($agatha, $bertha) {
	$ag = 0;
	$be = 0;
	foreach($agatha as &$value){
		$ag += array_product($value);
	}
	
	foreach($bertha as &$value){
		$be += array_product($value);
	}
	return ($ag == $be) ? true : false;
}

echo testFairness([[1,5], [6,3], [1,1]], [[7,1], [2,2], [1,1]]) . "\n";
?>