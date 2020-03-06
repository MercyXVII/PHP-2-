<?php
function fibonacci($b) {
 return fibonacci($b-1) + fibonacci($b-2);
  }
 }
echo fibonacci(10);
?>
