<?php
require_once 'CookieShell.php';

$csh = new CookieShell;
if ($csh->exists('counter')) {
	$count = $csh->get('counter') + 1;
	$csh->set('counter', $count, 3600 * 24);
}else{
	$csh->set('counter', 1, 3600 * 34);
}
//$csh->set('test', '123', 3600 * 24);


//$csh->del('test');
echo $csh->get('counter'); // выведет 123
