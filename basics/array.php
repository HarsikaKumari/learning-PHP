<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="array.php" method="post">
        <label> Enter a county: </label>
        <input type="text" name="country">
        <button type="submit"> submit </button>
    </form>
</body>

</html>

<?php
$capitals = array(
    "USA" => "Washington D.C",
    "japan" => "kyoto",
    "south korea" => "seoul",
    "India" => "New Delhi",
);

$countryName = $_POST["country"];
$capital = $capitals[$countryName];
echo "The capital of {$countryName} is {$capital} <br>";
echo $countryName;

// $capitals["USA"] = "Las vegas";
// array_pop($capitals);
// array_shift($capitals);
// $values = array_values($capitals);
// $keys = array_keys($capitals);
// $capitals = array_flip($capitals);
// $capitals = array_reverse($capitals);
// echo count($capitals);


// foreach ($capitals as $key => $value) {
//     echo " {$key} = {$value} <br>";
// }

// foreach ($capitals as $capital) {
//     echo $capital . "<br>";
// }

// foreach ($values as $value) {
//     echo $value . "<br>";
// }
?>