<?php
function fibonacci($b) {
  $fib1 = -1;
  $fib2 = 1;
    for ($a = 1; $a <= $b; $a++) {
    $fib = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fib;
    echo $fib .", ";
  }
 }
echo fibonacci(10);
?>
