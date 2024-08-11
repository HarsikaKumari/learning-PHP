<?php
/*
write a php program to get absolute difference between n and 51. if n is greater than 51 return triple the absolute differnce
sample input: 53 30 51
sample output: 6 21 0 
*/
function difference($num) {
	return ($num > 51) ? 3 * ($num - 51) : (51 - $num);
}

echo difference(53) . "<br>";
echo difference(30) . "<br>";
echo difference(51) . "<br>";

?>