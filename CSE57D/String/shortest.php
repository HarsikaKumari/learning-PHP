<?php
/*php script to get the shortest/longest string length from an array*/

$a=array("abcd","abc","de","hjjj","g","wer");
$a1=array_map("strlen",$a);
echo "the shortest length ".min($a1);
echo ", the longest length ".max($a1);

?>