<?php
function test($s){
return substr($s,strlen($s)-1,1).substr($s,1,strlen($s)-2).substr($s,0,1);
}
 echo test("abcd");
 echo test ("a");
?>