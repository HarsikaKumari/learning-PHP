<?php
	//arithmetic operations on character variables: $d = 'A00'. Using this variable print this numbers
	//A01 A02...A05
	
	$d = 'A00';
	
	for($n = 0; $n < 5; $n++) {
		echo ++ $d . "\n";
	}
?>