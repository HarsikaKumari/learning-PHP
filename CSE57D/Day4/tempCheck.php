<?php
// check temp is temp1 > 100 and temp < 0;

function check_temp($temp1, $temp2) {
	return ($temp1 > 100 || $temp1 < 0) && ($temp2 < 0 || $temp2 > 100);
}

var_dump(check_temp(120, -1));
echo "<br>";
var_dump(check_temp(-1, 120));
echo "<br>";
var_dump(check_temp(2, 120));
echo "<br>";

?>
