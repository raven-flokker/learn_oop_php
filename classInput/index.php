<?php
require_once '../classTag/Tag.php';
require_once 'Input.php';
require_once '../classForm/Form.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';
require_once 'Textarea.php';
require_once 'Checkbox.php';
require_once 'Radio.php';
require_once 'Select.php';
require_once 'Option.php';

const COUNT = 5;

//$form = (new Form)->setAttrs(['action'
//=> '', 'method' => 'GET']);
//
//echo $form->open();
//echo (new Input)->setAttr('name', 'year');
//echo (new Input)->setAttr('type', 'submit');
//echo $form->close();
//
//$form = (new Form)->setAttrs(['action'
//=> '', 'method' => 'GET']);
//
//echo $form->open();
//echo (new Input)->setAttr('name',
//	'year')->setAttr('value', date('Y'));
//echo (new Input)->setAttr('type', 'submit');
//echo $form->close();

//$form = (new Form())->setAttrs(['action'
//=> '', 'method' => 'GET']);
//
//echo  $form->open();
//for ($i=1; $i <= COUNT; $i++) {
//	echo (new Input())
//		->setAttr('name', "num_".$i)
//		->setAttr('type', 'number');
//	echo '<br><br>'.PHP_EOL;
//}
//
//echo new Submit;
//echo $form->close();
//
//$result = null;
//
//for ($i=1; $i <= COUNT; $i++) {
//	if (!empty($_GET["num_$i"])){
//		$result +=  $_GET["num_$i"];
//	}
//}
//
//if (!is_null($result)) {
//	echo (new Tag('h3'))->setText("Sum = $result");
//}
//
//$form = (new Form)->setAttrs([
//	'action' => 'test.php',
//	'method' => 'GET'
//]);
//
//echo $form->open();
//echo (new Input)   ->setAttr('name', 'login');
//echo (new Password)->setAttr('name', 'passw');
//echo new Submit;
//echo $form->close();

//$form = (new Form)->setAttrs([
//	'action' => 'test.php',
//	'method' => 'GET'
//]);
//
//echo $form->open();
//echo (new Hidden)->setAttr('name',
//	'id')->setAttr('value', '123');
//echo (new Input)->setAttr('name', 'year');
//echo new Submit;
//echo $form->close();


//$form = (new Form)->setAttrs(['action'
//=> '', 'method' => 'GET']);
//
//echo $form->open();
//echo (new Input)->setAttr('name', 'user').'<br>';
//echo (new Textarea)->setAttr('name',
//	'message')->show().'<br>';
//echo new Submit;
//echo $form->close();

//$form = (new Form)->setAttrs([
//	'action' => '',
//	'method' => 'GET'
//]);
//
//echo $form->open();
//echo (new Checkbox)->setAttr('name', 'checkbox');
//echo (new Radio)->setAttr('name', 'radio')->setAttr('value','PHP');
//echo (new Radio)->setAttr('name', 'radio')->setAttr('value','Java');;
//echo (new Input)->setAttr('name', 'user');
//
//echo new Submit;
//echo $form->close();


$form = (new Form)->setAttrs([
	'action' => '',
	'method' => 'GET'
]);
echo $form->open();
echo (new Select)
	->setAttr('name', 'list')
	->add( (new Option())->setText('item1') )
	->add( (new Option())->setText('item2')->setSelected() )
	->add( (new Option())->setText('item3') )
	->show();
echo new Submit;
echo $form->close();