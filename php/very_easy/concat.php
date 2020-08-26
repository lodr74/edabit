<?php
function concat($arr1, $arr2) {
	 return array_merge($arr1,$arr2);
}

echo concat([1, 3, 5], [2, 6, 8]) . "\n";
?>
