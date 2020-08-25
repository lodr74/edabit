<?php
function doubleChar($str) {
$retString = '';
for($i=0;$i<strlen($str);$i++){
  $retString = $retString . $str[$i] . $str[$i];

}
return $retString;
}

echo doubleChar("String") . "\n";
?>
