<?php

function smallerNum($n1, $n2) {
	 return ((int)$n1 <= (int)$n2 ? $n1 : $n2);
}

echo smallerNum('30','30'). "\n";

?>
