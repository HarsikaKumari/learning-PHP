<html>
<?php
/* php program to check if a given non-negative number is a multiple of 3 and 7 , but not both.
*/
$first_num=$_POST['First'];
$result=""; 
function multiple($a){
	if (($a%3==0)^($a%7==0)){
		return 1;
	}
	else{
	return 0;}
}		
?>
<body>
<form action="" method ="post">
<label>First number</label>
<input type="number" name="First"/><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<?php echo var_dump(multiple($first_num));?>