<?php
require_once 'HtmlList.php';
require_once 'Ul.php';
require_once 'Ol.php';

$list = new HtmlList('ul');

echo $list
	->addItem((new ListItem())->setText('item1'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3'))
	;

$ul = new Ul; // сделаем список ul
$ol = new Ol; // сделаем список ol

echo $ul->addItem((new ListItem())->setText('rrr'));
echo $ol->addItem((new ListItem())->setText('ffff'));