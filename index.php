<?php
function greeting($name)
{
    echo 'Hello' . $name;
}

function discount($money)
{
    return $money * (1 - 0.2);
}
$price = 80;
$pay = discount($price);

$greeting = 'Hello'; //string
$price = 80;
$completed = true; // false boolean
$names = ['Andy', 'Thomas'];      // array 数组
$names = (array) ['Andy', 'Thomas'];
//$names[0] // 'Andy' 
//$names[1] // 'Thomas'

$person = 'Thomas';
$person2 = 'Andy';

greeting($person);
greeting($person2);
greeting('Mary');

//swap($a, $b){

//}
//swap('Andy', 'Thomas') = ['Thomas', 'Andy'];

