<?php
function profitableGamble($prob, $prize, $pay) {
          return ($prob * $prize > $pay) ? true : false;

}

echo profitableGamble(0.2, 50, 9) . "\n";
?>
