<?php
// php script to set a cookie and a session variable with the same name.Display their values to compare.

session_save_path('C:\xampp\htdocs\Anchal\Session');

$cookie_name="Anchal";
$cookie_value="Last code for session";

setcookie($cookie_name,$cookie_value,time()+3600,"/");

session_start();
$_SESSION[$cookie_name]=$cookie_value;

echo "Cookie value:".$_COOKIE[$cookie_name]."</br>";

echo "Session variable:".$_SESSION[$cookie_name];
	

?>