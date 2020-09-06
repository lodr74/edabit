<?php
function testFairness($agatha, $bertha) {
	$sumAg = 0;
	$sumBe = 0;
	foreach ($agatha as $Ag){
		$sumAg += $Ag[0] * $Ag[1];
	}

	foreach ($bertha as $Be){
		$sumBe += $Be[0] * $Be[1];
	}
	
	if($sumAg === $sumBe){
		return true;
	}else{
		return false;
	}
}


echo testFairness([[2,2], [2,2], [2,2], [2,2]], [[4,4]]). "\n";
?>