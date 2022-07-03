<?php
require_once 'SessionShell.php';

$ses = new SessionShell();
$ses->set('test', 'testses');

echo $ses->get('test');
