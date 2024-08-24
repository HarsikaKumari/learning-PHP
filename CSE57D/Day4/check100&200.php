<?
// check the number lies b/w 100 and 200
function check($num1, $num2) {
	return ($num1 >= 100 && $num1 <= 200) || ($num2 >= 100 && $num2 <= 200)
}

var_dump(check(100, 199));
echo "<br>";
var_dump(check_temp(250, 300));
echo "<br>";
var_dump(check_temp(105, 190));
echo "<br>";

?>
