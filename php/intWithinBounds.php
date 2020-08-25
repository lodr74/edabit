<?php
function intWithinBounds($n, $lower, $upper) {
	if (is_integer($n)){
				if ($n === $upper){
					return false;
					}else{
		 return ($lower <= $n && $n < $upper ? true : false);
				}
	 }else{
		 return false;
	 }
}

echo intWithinBounds(7, 7, 12) . "\n";
?>
