<?php
function factorial($num) {
	echo "Number is " . $num . "\n";
	if ($num == 0){
		return $answer;
	}else{
	$counter = $num -1;
	$answer = $num * $counter;
	echo "Answer is " . $answer . "\n";
	factorial($num -1);
	}
}

echo factorial(5) . "\n";
?>