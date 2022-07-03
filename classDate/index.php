<?php
require_once 'Date.php';
require_once 'Interval.php';

//$date = new Date('');
//
//echo $date->getDay();
//echo $date->getMonth();
//echo $date->getWeekDay();
//
//echo (new Date('2025-12-31'))->addDay(1);
//
////$date = new DateTest();
////
//echo $date->getYear();  // выведет '2025'
//echo $date->getMonth(); // выведет '12'
//echo $date->getDay();   // выведет '31'
//
//echo $date->getWeekDay();     // выведет '3'
//echo $date->getWeekDay('ru'); // выведет 'среда'
//echo $date->getWeekDay('en'); // выведет 'wednesday'
//
//echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
//echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

echo $interval->toDays();   // выведет разницу в днях
echo $interval->toMonths(); // выведет разницу в месяцах
echo $interval->toYears();  // выведет разницу в годах
