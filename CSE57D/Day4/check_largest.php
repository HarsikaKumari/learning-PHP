<!-- find the maximum by taking the numbers from the form -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
<?php
$integer1 = $_POST['integer1'] ?? '';
$integer2 = $_POST['integer2'] ?? '';
$integer3 = $_POST['integer3'] ?? '';

$result = max($integer1, max($integer2, $integer3));

?>
	<h1>Find the maximum of three numbers</h1>
	<form method="post" action="">
		<label> Integer 1</label>
		<input type=number name="integer1"  id="integer1" value="<?php echo $integer1 ?>"> <br>
		<label> Integer 2</label>
		<input type=number name="integer2" id="integer2" value="<?php echo $integer2 ?>"> <br>
		<label> Integer 3</label>
		<input type=number name="integer3" id="integer3" value="<?php echo $integer3 ?>"> <br>
		<input readonly="readonly" value="<?php echo $result ?>">
		<input type="submit" name="submit">
		
	</form>

</body>

</html>
