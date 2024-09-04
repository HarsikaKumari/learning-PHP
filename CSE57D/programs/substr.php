<html>
<?php
$letter=$_POST['letter'];
$number=$_POST['number'];
$result="";
function test($s,$n){
	$result= substr($s,0,$n).substr($s,$n+1,strlen($s)-($n));
	
}
?>
<body>
<form action="" method ="post">
<label>Letter</label>
<input type="text" name="letter"/><br>
<label>Number</label>
<input type="number" name="number"/><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<?php echo $result;?>