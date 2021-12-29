<?php
echo '200 <br/>';
echo 'Hello from php first.... <br/>';
print ('from print <br/>');

$name ="shariful Islam mamun";
echo $name. '<br/>';
$id = 201015100;
echo  $id . '<br/>';

//define use for unchangeable value

define('PI',3.1416);
echo PI . '<br/>';

define('LO',143);
echo LO . '<br/>';

//expression

$number1 = 10;
$number2 = 20;

$resultOfSum = $number1 + $number2;
echo 'Result of Sum =',$resultOfSum . '<br/>';

$resultOfMultiple = $number1 * $number2;
echo 'Result of multiple=', $resultOfMultiple . '<br/>';

$resultofModulus = $number1 % $number2;
echo 'Result of modulus=',$resultofModulus . '<br/>';

$resultOfPower = $number1 ** $number2;
echo 'Result of Power=',$resultOfPower. '<br/>';

//concatation assignment variable


$name ='shariful';
$name .= " Islam";  // string concatination .=

echo $name .'<br/>';

//comparision operator

var_dump(10 >= 11);