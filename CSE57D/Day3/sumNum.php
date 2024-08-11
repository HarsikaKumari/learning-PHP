<?php
/*
cumpute the sum of the two given integer values. if the two values are the same, then return triple their sum.
sample input : 1,2 | 3,2 | 2,2
sample output: 3 | 5 | 12
*/
function findSum($a, $b) {
		
		return ($a == $b) ? $sum = 3*($a+$b) :  $sum = ($a + $b);
	}
	
	echo findSum(3, 4). "<br>";
	echo findSum(5, 4) . "<br>";
	echo findSum(4, 4). "<br>";

?>