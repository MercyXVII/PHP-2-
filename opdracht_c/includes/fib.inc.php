<?php
function fibonacci($b) {
 if ($b = 0) { 
 return 0; } 
 if ($b <= 2) {
 return 1; } 
 return fibonacci($b-1) + fibonacci($b-2);
  }
 }
echo fibonacci(10);
?>
