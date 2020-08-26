<?php

function footballPoints($wins, $draws, $losses) {
	return (($wins*3)+($draws*1)+($losses*0));
}

echo footballPoints(4,5,0) . "\n";


?>
