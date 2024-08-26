<?php
//check the positive number is multiple of 3 or 7

function check_multiple($num)
{
	return $num % 3 == 0 || $num % 7 == 0;
}

var_dump(check_multiple(3)) . "<br>";
var_dump(check_multiple(14)) . "<br>";
var_dump(check_multiple(12)) . "<br>";
var_dump(check_multiple(37)) . "<br>";
?>

<?php
$foo = 'Bob';
$bar = &$foo;
$bar = "My name is $bar";
echo $bar;
echo $foo; //My name is BobMy name is Bob
?>

<?php
	 $total="25 students" ;
	 $more=10;
	 $total=$total + $more; //Warning: A non-numeric value encountered in C:\xampp\htdocs\learnPHP\CSE57D\Day4\multipleOf3&7.php on line 26
	 echo "$total" ; //35
	?>