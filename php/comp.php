<?php
function comp($str1, $str2) {
    return (strlen($str1) == strlen($str2)) ? true : false;
}

echo comp("AB", "CD") . "\n";

?>
