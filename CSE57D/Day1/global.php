<?php
	$x = 5;
	$y = 10;
	
	function myTest() {
	$GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	myTest();
	echo $x;
?>