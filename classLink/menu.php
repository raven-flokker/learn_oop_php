<?php
require_once 'Link.php';
$dir = '/MagicMethods/classLink';

echo (new Link())->setAttr('href', $dir.'/index.php')
	->setText('index')->show();
echo (new Link())->setAttr('href', $dir.'/1.php')
	->setText('1.php')->show();
echo (new Link())->setAttr('href', $dir.'/2.php')
	->setText('2.php')->show();
echo (new Link())->setAttr('href', $dir.'/3.php')
	->setText('3.php')->show();
echo (new Link())->setAttr('href', $dir.'/4.php')
	->setText('4.php')->show();
echo (new Link())->setAttr('href', $dir.'/5.php')
	->setText('5.php')->show();

