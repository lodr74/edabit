<?php
function upwardTrend($arr) {
	print_r(array_values($arr));
	$i = 0;
	while($i < sizeof($arr)){
		if(is_string($arr[$i])){
			return "Strings not permitted!";			
		}
		if($i==0){
			$i++;
			continue;
		}
		$cur = current($arr);
		echo "Cur is: " . $cur . "\n";
		$nex = next($arr);
		echo "Next is: " . $nex . "\n";
		if($cur > $nex){
			echo "Value:" . $cur . ":" . $nex . "\n";
			return false;
		}elseif(($i+1) == sizeof($arr)){
			echo "Positive match\n";
			return true;
		}else{
	  	 $i++;
		 continue;
		}
	 }
	}

echo upwardTrend([1, 2, 3, 4, 5, 6]) . "\n";
?>