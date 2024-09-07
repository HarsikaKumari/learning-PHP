<?php
function test($s){
return substr($s,0,2)==substr($s,strlen($s)-2,2);
}
echo test("abab");
//echo test("abcdef");	
?>