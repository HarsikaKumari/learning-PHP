
<?php
/* function to calculate the factorial of a number.the function accepts the number as a argument.*/
function fact($n){
	if($n==1){
		return 1;
	}
	else{
		return $n*fact($n-1);
	}
}
echo fact(6);
?>
