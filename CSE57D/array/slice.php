<?php
$a1=array(1,2,3,4,5);
$a2=array("$");
array_splice($a1,3,0,$a2);
print_r($a1);
?>