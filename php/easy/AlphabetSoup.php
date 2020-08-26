<?php
function AlphabetSoup($str) {
	$newStr = '';
	$arr = str_split($str);
	sort($arr);
  foreach($arr as $value){
			$newStr = $newStr . $value;
	}
	return $newStr;
}

echo AlphabetSoup("WelcomeToTheJungle") . "\n";
?>