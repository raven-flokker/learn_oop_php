<?php
require_once '../classTag/Tag.php';

class ListItem extends Tag
{
	public function __construct()
	{
		parent::__construct('li');
	}
	
}