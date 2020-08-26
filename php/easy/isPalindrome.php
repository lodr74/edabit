<?php
function isPalindrome($n) {
	return ($n == strrev($n) ? true : false);
}

echo isPalidome(883388) . "\n";
?>