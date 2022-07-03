<?php
require_once 'Validator.php';

$valid = new Validator();

var_dump($valid->isEmail('USEREXAMPLE.com'));
//print_r(stristr('USER@EXAMPLE.com', 'e'));
echo $valid->inRange(50, 10, 50);
echo $valid->isDomain('example.com');
echo $valid->inLength('', 1, 10);