<?php
session_save_path('C:\xampp\htdocs\learnPHP\CSE57D\SessionCookie');
session_start();

$session_timeout=60;
$current_time=time();

if(isset($_SESSION["lastactivity"])){
	$lastactivity=$_SESSION["lastactivity"];
	$timeactivity=$current_time-$lastactivity;
	
	if($timeactivity>$session_timeout){
		session_unset();
		session_destroy();
		echo "Session is destroyed.PLease log in";
	}
	else{
		$_SESSION["lastactivity"]=$current_time;
		echo "session is updated";
	}
}else{
		$_SESSION["lastactivity"]=time();
		echo "Session is active";
	}
			
?>