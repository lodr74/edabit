<?php

function frames($minutes, $fps) {
	return ($minutes*$fps*60);
}

echo frames(4,5) . "\n";


?>
