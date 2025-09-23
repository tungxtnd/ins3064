<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   http://localhost/ins3064/week2/ex4.php?x=10&y=7
       $x = $_GET['x'];
       $y = $_GET['y'];
       echo "x / y : " . ($x / $y) . "<br/>";
       echo "x % y: " . ($x % $y) . "<br/>";
       echo "x + y = " . ($x + $y) . "<br/>";
       echo "x - y = " . ($x - $y) . "<br/>";
       echo "x == y: " . ($x == $y) . "<br/>";
       echo "x != y: " . ($x != $y) . "<br/>";
       echo "x > y : " . ($x > $y) . "<br/>";
       echo "x < y: " . ($x < $y) . "<br/>";
       echo "x >= y: " . ($x >= $y) . "<br/>";
       echo "x <= y: " . ($x <= $y) . "<br/>";
    ?>

</body>
</html>