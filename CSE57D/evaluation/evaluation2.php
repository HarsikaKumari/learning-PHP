<html>
<body>
<?php
$num = $_POST['first']??"0";

#while($count = 0){
/*
for($a = 0; $a <= 9; $a++){
		for($b = 0; $b <= 9; $b++){
			for($c = 0; $c <= 9; $c++){
				for($d = 0; $d <= $num-($a+$b+$c); $d++){
					if($a+$b+$c+$d == $num){
						echo $a, $b, $c, $d;
					}
				}
			}
		}
	}
*/
$count = 4;
$num1 = $num-1;
$a = $num1/$count;
$count--;
$b = $num1/$count;
$count--;
$c = $num1/$count;
$d = ($a+$b+$c) - $num1;
echo "the first number is ".floor($a)." the second number is ".floor($b)." the third number is ".floor($c)." the fourth number is ".ceil($d);
echo "<br> The sum is ".floor($a+$b+$c+$d);

?>
<form action="" method="post">
<label>Number</label>
<input type="number" name="first"/> <br>
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>