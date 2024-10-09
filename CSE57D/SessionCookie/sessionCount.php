<?php
session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();

$max=3;
if(!isset($_SESSION['session_count'])){
	$_SESSION['session_count']=1;
}
else{
	$_SESSION['session_count']++;

  if($_SESSION['session_count']>$max){
	session_unset();
	session_destroy();
	echo "session is destroyed";
	exit;
  }
}
echo "session is active.session count:".$_SESSION['session_count'];
			
?>