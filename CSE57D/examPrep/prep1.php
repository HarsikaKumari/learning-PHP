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
<?php
$a1;
if ($a1) {
    echo $a1;
    echo "hi";
} else {
    echo "How are you";
}
?><br>
<?php
$a = 0;
while ($a++) {
    echo "$a";
}
echo $a;
?> <br>
<?php
$x = 15;
$y = 20;
if ($x < ++$x || $y < ++$y) {
    echo "Hello World";
} else {
    echo "Hii everyone";
}
?> <br>
<?php
$a = "1";
switch ($a) {
    case 1:
        echo "Hello";
    case 2:
        echo "World";
    default:
        echo "This is javaTpoint.com";
}
?><br>
<?PHP
echo CHR(52);
?><br>
<?PHP
echo ORD("HI") . "<br>";
echo ORD("hi");
?><br>
<?PHP
$arr = array(12, 5, 2);
echo (ARRAY_PRODUCT($arr));
?><br>
<?php
$foo = 'Bob';
$bar = &$foo;
$bar = "My name is $bar";
echo $bar;
echo $foo;
?><br>
<?php
$fruits = array("mango", "apple", "pear", "peach");
$fruits = array_flip($fruits);
echo ($fruits[0]);
?> <br>
<?php
$Rent = 250;
function Expenses($Other)
{
    $Rent = 250 + $Other;
    return $Rent;
}
Expenses(50);
echo $Rent . "<br>";
$company = "ABS Ltd";
$$company = ",Sydney";
echo $company, $$company;
?> <br>
<?php
function doSomething(&$arg)
{
    $return = $arg;
    $arg += 1;
    return $return;
}
$a = 3;
$b = doSomething($a);
print ($b) . "<br>";
print ($a) . "<br>";

$x = 5; {
    $x = 10;
    echo "$x";
}
echo "$x" . "<br>";
?>

<?php
$user = array("ashley", "bale", "shrek", "blank");
for ($x = 0; $x < count($user); $x++) {
    if ($user[$x] == "shrek") continue;
    printf($user[$x]) . "<br>";
}

$score = 1234;
$scoreboard = (array) $score;
echo "<br>" . $scoreboard[0] . "<br>";
?>

<?php
function track()
{
    static $count = 0;
    $count++;
    echo $count;
}
track();
track();
track();

$a = 5;
$b = 5;
echo "<br>" . ($a === $b);
?> <br>
<?php
$val = 15;
// while ($val-- > 2 || ++$val) {
    print $val;
// }
?>