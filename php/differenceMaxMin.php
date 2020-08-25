<?php
function differenceMaxMin($arr) {
	return max($arr) - min($arr);
}

echo differenceMaxMin([10,5,31,42,99]) . "\n";
?>
