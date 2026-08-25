<!DOCTYPE html>
<html lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="COS30020 Advanced Web Development :: Lab 3" />
<meta name="keywords" content="Web,programming" />
<title>Using if statement</title>
</head>
<body>
<h1>COS30020 Advanced Web Development - Lab 3</h1>
<?php
  // s104542629
  function is_leapyear ($year) {                  // declare the is_leapyear function

    if ($year / 4 == round ($year / 4)) {         // divisible by 4
      if ($year / 100 == round ($year / 100)) {   // also divisible by 100
        if ($year / 400 == round ($year / 400)) { // also divisible by 400
          return true;
        } else {
          return false;
        }
      } else {
        return true;
      }
    } else {
      return false;
    }
  }

  if (isset ($_GET["year"])) {     // check if form data exists
    $year = $_GET["year"];         // obtain the form data

    if (is_numeric ($year)) {      // check the value is a number
      if (is_leapyear ($year)) {
        echo "<p>", $year, " is a leap year.</p>";
      } else {
        echo "<p>", $year, " is a standard year.</p>";
      }
    } else {                       // value is not a number
      echo "<p>Please enter a number.</p>";
    }
  } else {                         // no input
    echo "<p>Please enter a year.</p>";
  }
?>
</body>
</html>
