<?php

  function fibonacci($n) {
    if ($n <= 1) {
        return $n;
      }

      $fib = fibonacci($n - 1) + fibonacci($n - 2);
      return $fib;
 }

  $n = 9;
  for ($i = 1; $i <= $n; $i++) {
    echo fibonacci($i) .", ";
  }

?>
