<?php
function armstrong_check($num){
	$temp = $num;
	$sum = 0;
	while($temp > 0) {
		$n1 = $temp % 10;
		$sum = $sum + ($n1**3);
		$temp = intdiv($temp, 10);
	}
	if($sum == $num) {
		echo "The number is armstrong number";
	} else {
		echo "The number is not a armstrong number";
	}
}

armstrong_check(183);
/*
$num = 123;
//intdiv(dividend, divisor);
echo intdiv($num, 10);
*/

?>