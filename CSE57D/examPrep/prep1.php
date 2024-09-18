<?php
$a = 12;
--$a;
echo $a++;
?> <br>
<?php
$a = 10;
echo ++$a;
echo $a++;
echo $a;
echo ++$a;
?> <br>
<?php
$y = 2;
if (--$y == 2 || $y xor --$y) {
    echo $y;
}
?><br>
<?php
$y = 2;
if (--$y <> ($y != $y++)) {
    echo $y;
} // no output
?><br>
<?php
$x = 0;
echo $x-- != ++$x;
?><br>
<?php
$auth = 1;
$status = 1;
if ($result = (($auth == 1) && ($status != 0))) {
    print "result is $result<br />";
}
?><br>
<?php
$x = 10;
$y = 20;
if ($x > $y && 1 || 1)
    print "1000 PHP MCQ";
else
    print "Welcome to Sanfoundry";
?><br>
<?php
$fruits = array("apple", "orange", array("pear", "mango"), "banana");
echo (count($fruits, 1));
?><br>
<?php
function multi($num)
{
    if ($num == 3)
        echo "I Wonder";
    if ($num == 7)
        echo "Which One";
    if ($num == 8)
        echo "Is The";
    if ($num == 19)
        echo "Correct Answer";
}
$can = stripos("I love php, I love php too!", "PHP"); //7
echo $can;
multi($can);
?><br>
<?php
class Example
{
    public $name;
    function Sample()
    {
        echo "Learn PHP @ Sanfoundry";
    }
}
?><br>
<?php
define("GREETING", "PHP is a scripting language");
echo $GREETING;
?><br>
<?php
$url = "phpmcq@sanfoundry.com";
echo ltrim(strstr($url, "@"), "@");
?><br>
<?php
$x = 5;
$y = 10;
function fun()
{
    $y = $GLOBALS['x'] + $GLOBALS['y'];
}
fun();
echo $y;
?><br>
<?php
define("VAR_NAME", "test");
${VAR_NAME} = "value";
echo VAR_NAME;
echo ${VAR_NAME}; // testvalue
?><br>
<?php
$i = 5;
// while (--$i > 0 && ++$i) {
print $i;
// }
?><br>
<?php
$php = array("Array", "Function", "Strings", "File");
echo pos($php);
?><br>
