<html>
<body>
<?php
$first_num = $_POST['first']??"0";
$second_num = $_POST['second']??"0";

function check($a, $b) {
		return (($a + $b) >= 10 && ($a + $b) <= 20) ?"30":"0";
	}

echo check($first_num, $second_num);
?>
<form action="" method="post">
<label> First Number </label>
<input type="number" name="first"/> <br>
<label> Second Number </label>
<input type="number" name="second" /> <br>
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
