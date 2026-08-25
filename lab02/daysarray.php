<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="description" content="COS30020 Advanced Web Development :: Lab 2" >
    <meta name="keywords" content="Web,programming" >
    <title>Experimenting on arrays</title>
</head>
<body>
    <h1>COS30020 Advanced Web Development - Lab 2</h1>
    <?php
      // s104542629
      $days = array ("Sunday", "Monday", "Tuesday", "Wednesday",
                     "Thursday", "Friday", "Saturday");   // declare and initialise array

      echo "<p>The Days of the week in English are: ",
           $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ",
           $days[4], ", ", $days[5], ", ", $days[6], ".</p>";

      $days = array ("Dimanche", "Lundi", "Mardi", "Mercredi",
                     "Jeudi", "Vendredi", "Samedi");      // reassign the values

      echo "<p>The days of the week in French are: ",
           $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ",
           $days[4], ", ", $days[5], ", ", $days[6], ".</p>";
    ?>
</body>
</html>
