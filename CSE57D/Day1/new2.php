<?php
    $author = "Trevor Adams";
    //$msg = "Hello World";
    //echo $author . " says " . $msg;
	
	function myTest(){
		//$author = "Trevor Adams";
		global $author;
		echo "The name of the author is: ". $author . "<br>";
	}
	myTest();
	
	echo "The name of the author is: ". $author;
?>