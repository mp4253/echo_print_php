<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Using echo & print </title>
</head>
<body>

    <?php
      
      echo "Visit XYZ State India Country.";

      echo "<br><b>Visit"."XYZ</b> State India Country.";

      echo "<br><b>Visit "."XYZ</b> State India Country.";

      echo "<br>";

      $value_1 = 25;
      $value_2 = 30;
      $value_3 = 55;

      $sum = ($value_1 + $value_2)+($value_3);

      echo "The sum of three numbers is&nbsp","<b>$sum.</b>";

      print("<br>Hello World");

    // echo has no return value whereas print is more like functions so it returns value 
    // which always set to 1.

    // echo can take multiple parameters while print can take one argument.
    // echo is faster than print.
    
    ?>
    
</body>
</html>