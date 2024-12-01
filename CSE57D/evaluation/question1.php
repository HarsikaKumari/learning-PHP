<?php
// if cookie lpu exists display welocme else default

setcookie("lpu", "lovely professional university", time()+60, "/");

if(isset($_COOKIE["lpu"])){
	echo "Welcome user";
} else {
	echo "Please login again";
}
?>