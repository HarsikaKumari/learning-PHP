<?php
 for($x=1;$x<=5;$x++){
	  for($y=1;$y<=$x;$y++){
		  echo "*";
		  if($y<$x){
			  echo " ";
		  }
	  }
	  echo "<br>";
  }
  for($p=5;$p>=0;$p--){
	  for($q=1;$q<=$p;$q++){
		  echo "*";
		  if($y<$x){
			  echo " ";
		  }
	  }
	  echo "<br>";
  }
?>