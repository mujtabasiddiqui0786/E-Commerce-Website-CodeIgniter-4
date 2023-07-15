<?php

function factorial($num) {
    if ($num === 0 || $num === 1) {
      return 1;
    } else {
      $result = 1;
      for ($i = 2; $i <= $num; $i++) {
        $result *= $i;
      }
      return $result;
    }
  }


// run it
echo factorial(4); // Output: 24
echo factorial(8); // Output: 40320
?>