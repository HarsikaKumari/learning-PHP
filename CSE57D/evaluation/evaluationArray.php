<?php
$a1 = array("sophia" => "31", "jacob" => "41", "William" => "39", "Ramesh" => "40");
echo "The initial array: ";
print_r($a1);
echo "<br>";
//ascending by value
asort($a1);
echo "The ascending by value  array: ";
print_r($a1);
echo "<br>";
//ascending by key
arsort($a1);
echo "The ascending by key array: ";
print_r($a1);
echo "<br>";
//descending by value
ksort($a1);
echo "The descending by value array: ";
print_r($a1);
echo "<br>";
//descending by key
krsort($a1);
echo "The descending by key array: ";
print_r($a1);
echo "<br>";
?>