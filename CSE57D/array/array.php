<?php
$a=array("car","bmw","motorcycle");
unset($a[2]);
$a=array_values($a);
print_r($a);
?>