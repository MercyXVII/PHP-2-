<!DOCTYPE html>
<html>
  <head>
    <title>Opdracht A</title>
  </head>
    <body>
      <form action="calculator.php" method="POST">
        <label>Select operation:</label>
        <select name = "dropdown">
          <option></option>
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        <select> <br> <br>
          First number: <input type="number" name="firstNum" required><br><br>
          Second number: <input type="number" name="secondNum" required><br><br>
        <input type="submit" value = "Enter">
      </form>  
    </body>
</html>
