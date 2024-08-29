<html>
<?php
/* php program to compute the sum of two number given integer. if the sum is in the range 10..20 inclusive return 30.
*/
$first_num=$_POST['First'];
$second_num=$_POST['Second'];
$result="";
$sum=$first_num+$second_num;
	if($first_num>=10 && $second_num<=20){
	$result=30;
   }
    else{
   $result=$sum;
}
//checkNum($first_num,$second_num);
//checkNum(7,20);
?>
<body>
<form action="" method ="post">
<label>First number</label>
<input type="number" name="First"/><br>
<label>Second number</label>
<input type="number" name="Second"/><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<?php echo $result;?>