<?php
function maximumScore($tileHand) {
	$score = 0;
	for($i=0;$i<sizeof($tileHand);$i++){
		$score += $tileHand[$i]['score'];
	}
	return $score;
}

?>