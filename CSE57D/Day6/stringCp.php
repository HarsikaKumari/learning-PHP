<?php
	$s = $_POST['letter'] ?? "";

	function copyStr($s) {
		return strlen($s) >= 2 ? str_repeat(substr($s, 0, 2), 4) : $s ;
	}
?>

<form method="post" action="">
		<label> Enter your String to be Copied</label>
		<input type="text" name="letter"  id="letter" value="<?php echo $s ?>"> <br>
		<input readonly="readonly" value="<?php echo copyStr($s) ?>">
		<input type="submit" name="submit">
</form>
