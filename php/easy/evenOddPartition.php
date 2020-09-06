<?php
function evenOddPartition($arr) {
	$even = array();
	$odd = array();
	$retArr = array();
	foreach($arr as &$value){
		if ($value % 2 == 0){
			array_push($even,$value);
		}else{
			array_push($odd,$value);
		}
		
	}
	array_push($retArr, $even, $odd);
	return $retArr;
}

echo evenOddPartition($arr) . "\n";
?>