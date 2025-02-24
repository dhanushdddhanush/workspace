<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Welcome</h2>

    <?php
      echo"<h3>baiscs</h3>";
      $string = "HIIIIIIIIIIIII";
      $integer = 2;
      $float = 3.14;
      $boolean = true;
  
      echo "<p>String: $string</p>";
      echo "<p>Integer: $integer</p>";
      echo "<p>Float: $float</p>";
      echo "<p>$boolean</p>";
    $name = "Dhanush";
    $age=19;
    echo " <h3>$name</h3>";
    echo "<h3>If else</h3> ";
    if ($age>18) {
        echo "vote $name";
    } else {
        echo "not eligible $name";
    }

    echo "<h3> for Loops</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo "$i ";
    }
    echo "<h3>While Loop</h3>";
    $x = 1;
    while ($x <= 3) {
        echo "Number: $x <br>";
        $x++;
    }
    echo"<h3>Switch</h3>";
    $day = "monday";
    switch ($day) {
        case "monday":
            echo "<p>Day1</p>";
            break;
        case "Tuesday":
            echo "<p>   Day2</p>";
            break;
        case "wednesday":
            echo "<p>day3</p>";
            break;
        case "thursday":
            echo "<p>day4</p>";
            break;
        case "Friday":
            echo "<p>day5</p>";
            break;
        case "saturday":
            echo "<p>day6</p>";
            break;
        default:
            echo "<p>its days</p>";
    }
    echo"<h3>functions</h3>";
    function fullname($name) {
        return "fullname is  , $name";
    }
    echo fullname("Dhanush");

    
    
    echo"<h3>getting other page </h3>";
    include 'index.php';

    

?>
</body>
</html>
