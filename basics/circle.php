<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <form action="circle.php" method="POST">
        <label for="radius"> radius </label>
        <input type="number" name="radius"> <br>
        <input type="submit" value="find">
    </form>

</body>
</html>

<?php

$radius = $_POST["radius"];
$pi = pi();
$perimeter =round( 2 * $pi * $radius);
$area = round($pi * pow($radius, 2));
$volume = round(4/3  * $pi * pow($radius, 3));


echo "The perimeter of the circle is {$perimeter} <br>";
echo "The area of the circle is {$area} <br>";
echo "The volume of the circle is {$volume} <br>";
?>