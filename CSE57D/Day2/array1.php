<?php
/*
$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Peter" => "35", "Ben" => "37", "Joe" => "45");
print_r($b);
*/

/*
$num = 20;
printf($num > 30 ||  || $num > 10? $num > 20 : "The number is not greater then 30 or 20 0r 10");
*/
function ternary_test($n) {
	
	//Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)

$r = $n > 30
	? "greater than 30"
		: ($n > 20
			? "greater than 20"
				: ($n > 10
					? "greater than 10"
						: "Enter a value greater than 10"));
						
	 echo $n . "is" . $r;
	 
	 ternary_test(23);
	 ternary_test(34);
	 ternary_test(45);
	 ternary_test(2);
}
?>