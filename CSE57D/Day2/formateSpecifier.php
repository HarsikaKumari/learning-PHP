<?php
/* used with printf 
printf(outpurs a formatted string)
print_r - print array
%u = unsigned decimal number - >= 0
%s = string
%% to print %
*/

/*
$number = 123.907;
printf("With 2 decimals: %1\$.2f <br> With no decimals: %1\$u", $number);
*/

$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII character 50 is 2

// note: %% returns %
printf("%%b = %b <br>", $num1); //Binary number
printf("%%c = %c <br>", $char); //The ASCII character
printf("%%d = %d <br>", $num1); //signed deciamal number
printf("%%d = %d <br>", $num2); //signed decimal number
printf("%%e = %e <br>", $num1); //scientific notation (lowecase)
printf("%%E = %E <br>", $num1); //scientific (uppercase)
printf("%%u = %u <br>", $num1); //unsigned (positive)
printf("%%u = %u <br>", $num2); //unsigned (negitive)
printf("%%f = %f <br>", $num1); //floating point number (local setting aware)
printf("%%F = %F <br>", $num1); //floating point number (not local setting aware)
printf("%%g = %g <br>", $num1);
printf("%%G = %G <br>", $num1);
printf("%%o = %o <br>", $num1);
printf("%%s = %s <br>", $num1);
printf("%%x = %x <br>", $num1);
printf("%%X = %X <br>", $num1);
printf("%%+d = %+d <br>", $num1);
printf("%%+d = %+d <br>", $num2);


$str1 = "Hello";
$str2 = "Hello World";

printf("[%s] <br>", $str1);
printf("[%8s] <br>", $str1);
printf("[%-8s] <br>", $str1);
printf("[%08s] <br>", $str1);
printf("[%'*8s] <br>", $str1);
printf("[%'#8s] <br>", $str1);
printf("[%8.8s] <br>", $str2);
printf("[%9.2s] <br>", $str2);
printf("[%-8.2s] <br>", $str2);

/* output:-
[Hello]
[ Hello]
[Hello ]
[000Hello]
[***Hello]
[###Hello]
[Hello Wo]
[ He]
[He ]
*/
?>