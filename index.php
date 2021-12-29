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

var_dump(10 >= 11 );

//condition

$day = 'Sunday';

if ($day === 'Friday' || $day === 'Saturday'){
    echo 'Today is a Holiday';
}elseif ($day === 'Sunday'){
    echo 'Today is also not holiday . <br/>';
}else{
    echo 'Today is not holiday. <br/>';
}


// Array

$friend = ['mamun', 'tawfique', 'sujon' , 'afridi' , 30 , 50 , 50.96];
echo  $friend[1] .'<br/>';
print_r($friend).'<br/>';  //array full contenet কে দেখতে

//Assosiative array
//differnet between normal vs assosiative array . normal array key and value defined.but assosiative array key and value not defied

$array = [
    'first_name' => 'Shariful',
    'last_name' => 'Islam',
    'age'=> 25,
    'point' => 3.32,
    'address'=> [
        'home'=> '141 / D',
        'road' => '28',
        'place' => 'Mirpur'
    ],
    'phone_Number' => [
        'country_prefix' =>'+880',
        'national_number' => '01745526811'
    ]
];

echo $array['age'] .'<br/>';

//echo $array['address];

//loop php : 4 types
//for while do while for each

//while

$i= 1;

while ($i <= 10){
    echo $i . '*5' .  '=' . $i*5 . '<br/>';
    $i++;
}


// do while

do{
//    echo $i . '*7' .  '=' . $i*7 . '<br/>';
    $i++;
} while($i <= 10);


// for
for ($i=1; $i <= 10; $i++ ){
    echo $i . '*3' .  '=' . $i*3 . '<br/>';
}

//for each

$numbers = [2,3,4,5,6];

foreach ($numbers as $key => $value){
    echo $key .' '. $value  . '<br/>';
}

//function

function sum($num1 , $num2) {
    return   $num1 + $num2;

}

$output = sum(10, 20);
echo  $output . '<br/>' ;

function hello(){
    echo 'hello world';
}
hello();

//remove duplicate value using built in function

$duplicate = [20 ,30, 10,20 , 40,50];

$filtered_Array = array_unique($duplicate);

foreach ($filtered_Array as $arr){
    echo  $arr  . '<br/>';
}

 echo  count($duplicate);  // for array length
var_dump($filtered_Array);