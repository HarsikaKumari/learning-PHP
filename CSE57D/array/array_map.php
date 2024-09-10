<?php
function test($v){
return ($v*$v);
}
$a=array(1,2,3,4,5);
print_r(array_map("test",$a));

?>