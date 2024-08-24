<?php
//check 1 one of the 3 nmbers lies between 20 and 50
function check($num1, $num2, $num3) {
	return ($num1 >= 20 && $num1 <= 50)||($num2 >= 20 && $num2 <= 50)||($num3 >= 20 && $num3 <= 50);
}

var_dump(check(11, 20, 12));
echo "<br>";
var_dump(check(30, 30, 17));
echo "<br>";
var_dump(check(25, 35, 50));
echo "<br>";
var_dump(check(15, 12, 8));
echo "<br>";

?>