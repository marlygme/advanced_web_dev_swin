<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="description" content="Web Programming :: Lab 2" >
    <meta name="keywords" content="Web,programming" >
    <title>Using expression and looking up built-in functions</title>
</head>
<body>
    <h1>Web Programming - Lab 2</h1>
    <?php
      $value = 8;                       // declare a variable with a value

      is_numeric ($value)               // checks the value is a number
          ? ((round ($value) / 2 == round (round ($value) / 2))   // checks even
              ? $message = "The value is an even number."
              : $message = "The value is an odd number.")
          : $message = "The value is not a number." ;

      echo "<p>", $value, ": ", $message, "</p>";
    ?>
</body>
</html>
