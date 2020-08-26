<?php

function convert($hours, $minutes) {
	return (($hours*60)+$minutes)*60;
}


$x = convert(2,30);
echo $x . "\n";

?>
