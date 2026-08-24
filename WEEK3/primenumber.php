<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Web Application Development :: Lab 3" />
<meta name="keywords" content="Web,programming" />
<title>Implementing loop statements</title>
</head>
<body>
<h1>Web Application Development - Lab 3</h1>
<?php
  function is_prime ($n) {           // declare the is_prime function

    if ($n > 1) {                    // 1 is not a prime number
      $factor = $n - 1;              // declare and initialise the factor variable
      while ($factor > 1) {          // loop to test all division possibilities
        if ($n / $factor == round ($n / $factor)) {   // divides evenly
          return false;
        }
        $factor--;                   // next factor
      }
      return true;
    } else {
      return false;
    }
  }

  if (isset ($_GET["number"])) {     // check if form data exists
    $number = $_GET["number"];       // obtain the form data

    if (is_numeric ($number)) {      // check the value is a number
      if (is_prime ($number)) {
        echo "<p>", $number, " is a prime number.</p>";
      } else {
        echo "<p>", $number, " is not a prime number.</p>";
      }
    } else {                         // value is not a number
      echo "<p>Please enter a number between 1 and 999.</p>";
    }
  } else {                           // no input
    echo "<p>Please enter a number between 1 and 999.</p>";
  }
?>
</body>
</html>
