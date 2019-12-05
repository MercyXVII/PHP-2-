<!DOCTYPE html>
<html>
  <head>
    <title>Opdracht A</title>
  </head>
    <body>
      <form  method="post">
        <input type="radio" value= "+" name="calcu"> +
        <input type="radio" value= "-" name="calcu"> -
        <input type="radio" value= "*" name="calcu"> *
        <input type="radio" value= "/" name="calcu"> / <br>
          First number: <input type="number" name="num1"><br><br>
          Second number: <input type="number" name="num2"><br><br>
        <input type="submit" value="Enter">
      </form>
        <?php
          include('includes/calculator.php');
        ?>
    </body>
</html>
