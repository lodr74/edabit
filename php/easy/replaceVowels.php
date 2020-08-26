<?php

function replaceVowels($str, $ch) {
      return str_replace(array('a','e','i','o','u'),$ch,$str);
}

echo replaceVowels("A very long String with some awesome vowels","$") . "\n";

?>
