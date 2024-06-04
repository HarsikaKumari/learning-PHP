<?php
setcookie("favFood", "pizza",time() + -0, "/");
setcookie("favPlace", "pune", time() + (60*60*12*2), "/");
setcookie("favDessert", "halwa",time() + (60*60*12*2), "/");

foreach($_COOKIE as $key => $value) {
    echo"{$key} = {$value} <br>";
}

if (isset($_COOKIE["favFood"])) {
    echo"Your favorite food is {$_COOKIE["favFood"]} !!";
} else {
    echo"I don't know your favorite food";
}
?>
