<?php
function largestSwap($num) {
	return ($num >= strrev($num) ? true : false);
}

echo largestSwap(34) . "\n";
?>
