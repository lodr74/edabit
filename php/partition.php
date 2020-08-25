<?php
function partition($str, $n) {
	 return str_split($str,$n);
}

echo partition("test123123",3) . "\n"
?>
