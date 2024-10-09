<?php
session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();

$userpreferences=array("theme"=>"dark",
"language"=>"English",
"notifications"=>true
);
$_SESSION["prefer"]=$userpreferences;
echo "USER Preferences have been stored in the session variable";
?>