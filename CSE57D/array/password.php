<?php
/* generate the random password (contains uppercase,lowercase,numeric,and other)using shuffle()*/
function rand_Pass($uppercase=1,$lowercase=1,$numeric=3,$other=2){
	$pass=array();
	$password='';
	for($i=0;$i<$uppercase;$i++){
		$pass[]=chr(rand(65,90));
	}
		for($i=0;$i<$lowercase;$i++){
		$pass[]=chr(rand(97,122));
	}
		for($i=0;$i<$numeric;$i++){
		$pass[]=chr(rand(48,57));
	}
		for($i=0;$i<$other;$i++){
		$pass[]=chr(rand(33,64));
	}
	shuffle($pass);
	foreach($pass as $a){
	$password .=$a;
	}
	return $password;
}
	echo "Generated Password:",rand_Pass();


?>