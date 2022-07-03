<?php
require_once 'TagHelper.php';
require_once 'FormHelper.php';


//$th = new TagHelper();
//echo $th->open('div') . 'text' .
//	$th->close('div'); // <div>text</div>
//
//$th = new TagHelper();
//
//echo $th->open('form', ['action'
//=> 'test.php', 'method' => 'GET']);
//echo $th->open('input', ['name' => 'year']);
//echo $th->open('input', ['type' => 'submit']);
//echo $th->close('form');
//
//echo $th->show('div','lya lya lya');

//$fh = new FormHelper();
//
//echo $fh->openForm(['action' => '', 'method' => 'GET']);
//echo $fh->input(['name' => 'year']);
//echo $fh->checkbox(['name' => 'check']);
//echo $fh->textarea('text');
//echo $fh->submit();
//echo $fh->closeForm();

$fh = new FormHelper();
echo $fh->openForm(['action' => '', 'method' => 'GET']);
echo $fh->select(
	['name' => 'list', 'class' => 'eee'],
	[
		['text' => 'item1', 'attrs' =>
			['value' => '1']],
		['text' => 'item2', 'attrs' =>
			['value' => '2', 'selected' => true]],
		['text' => 'item1', 'attrs' =>
			['value' => '3', 'class' => 'last']],
	],

);
echo $fh->submit();
echo $fh->closeForm();