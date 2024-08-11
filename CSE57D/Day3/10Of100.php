<?php
/*
q. return true if it is within 10 of 100 or 200
SI: 103 - true
	90 - true
	89 - false
*/
function test($num) {
	//(abs(x - 100) <= 10 || abs(x - 200) <= 10)
		return abs($num - 100 <= 10) || abs($num - 200 <= 10) ? "True" : "False";
	}
	
	echo test(103). "<br>";
	echo test(90). "<br>";
	echo test(89). "<br>";

?>