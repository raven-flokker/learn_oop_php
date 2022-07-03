<?php
require_once 'DatabaseShell.php';

$db = new DatabaseShell('localhost', 'root', '', 'test');

//$db->save('users', ['name' =>
//	'user1', 'age' => '23']);

//$db->del('users', 1);

//$db->delAll('users', [1, 2, 3, 5]);

//$user = $db->get('users', 9);
//var_dump($user);
//$users = $db->getAll('users', [6, 7, 8, 9]);
//

//$users = $db->selectAll('users', 'where id >= 9');
//var_dump($users);