<?php
function correctSpacing($sentence) {
	return preg_replace('!\s+!', ' ', trim($sentence));
}

?>