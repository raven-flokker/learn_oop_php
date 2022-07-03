<?php
//require_once 'User.php';
//
//$user = new User('Name', 'Petuh', 'Pat');
//echo $user;

//require_once 'Arr.php';
//
//$arr = new Arr();
////var_dump($arr->add(2));
//echo $arr->add(1)->add(2)->add(3) ;
//
////echo $arr->getSum();


//require_once 'User.php';
//
//$user = new User('Yoo', 33);
//echo $user->name;
//echo $user->age;


//require_once 'Date.php';
//
//$date = new Date();
//$date->year = 2022;
//$date->mounth = 6;
//$date->day = 15;
//echo $date->weekDay;

require_once 'User.php';

$user = new User();
$user->name = 'Tt';
$user->age = 3;

echo $user->name;
echo $user->age;
