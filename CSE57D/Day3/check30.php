<?php
/*
write to check if one of two number is 30 or their sum if 30
*/
function check30($a, $b) {
	return ($a == 30 || $b == 30) || ($a + $b == 30) ?  "True" : "False";
}
echo check30(30, 22)."<br>";
echo check30(68, 22)."<br>";
echo check30(15, 15)."<br>";

?>