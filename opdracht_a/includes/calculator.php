<?php

  error_reporting(0);
  
  if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calc = $_POST['calcu'];
  }

    function calc($num1, $num2, $calc){
      switch($calc){
        case "+":
          $result = $num1 + $num2;
          break;
        case "-":
          $result = $num1 - $num2;
          break;
        case "*":
          $result = $num1 * $num2;
          break;
        case "/":
          $result = $num1 / $num2;
          break;
        default:
          echo "Invalid operation";
      }
      return $result;
    }
?>
