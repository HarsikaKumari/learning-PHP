<?php
session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();

if(isset($_SESSION["prefer"])){
	
$userpreferences=$_SESSION["prefer"];

  echo"user preferences:</br>";
     foreach ($userpreferences as $key =>$value){
        echo $key.":".$value."</br>";
    }
 }
 else{
	 echo "No user preferences found";
 }
?>