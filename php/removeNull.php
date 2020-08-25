<?php
function removeNull($arr) {
	if(in_array(null,$arr)){
			$arr = array_diff($arr, [null]);
	}
	$arr = array_values($arr);
  return $arr;
}

print_r(removeNull([null, null, null, null, null]));
?>
