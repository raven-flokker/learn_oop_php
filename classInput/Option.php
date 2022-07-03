<?php


class Option extends Tag
{
	public function __construct()
	{
		parent::__construct('option');
	}
	
	public function setSelected()
	{
		return $this->setAttr('selected', true);
		
	}
}