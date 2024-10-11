<?php
// Q.to display the last time the session was accessed by the user.

session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();

if(isset($_SESSION['last_access_time'])){
	$lastAccessTime=$_SESSION['last_access_time'];
	echo "last Access Time".date('Y-m-d H:i:s',$lastAccessTime);
	$_SESSION['last_access_time']=time();
	
}else{
		$_SESSION['last_access_time']=time();
		echo "Session started .First access.";
}

?>