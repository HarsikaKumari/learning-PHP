<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="counter.php" method="POST">
        <!-- <label for="number"> Enter a number to count: </label>
        <input type="number" name="number"> <br>
        <input type="submit" value="count"> <br>  -->
        <label for="highestNum"> Enter a number to count down: </label>
        <input type="number" name="highestNum"> <br>
        <input type="submit" value="count down">
    </form>

</body>

</html>

<?php
    // $number = $_POST["number"];
    $highestNum = $_POST["highestNum"];
    // for($i = 0; $i <= $number; $i++){
    //     echo $i . "<br>";
    // }
    for ($i = $highestNum; $i >= 0; $i--) {
        echo $i . "<br>";
    }
?>