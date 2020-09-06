<?php
function noOdds($arr) {
	$retArr = array();
	foreach($arr as $num){
		if($num%2==0){
			array_push($retArr,$num);
		}
	}
	return $retArr;
}
echo noOdds([1, 2, 3, 4, 5, 6]) . "\n";
?>