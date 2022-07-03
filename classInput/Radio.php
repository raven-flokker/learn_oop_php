<?php
require_once '../classTag/Tag.php';

class Radio extends Tag
{
	public function __construct()
	{
		$this->setAttr('type', 'radio');
		$this->setAttr('value', '1');
		
		parent::__construct('input');
	}
	
	public function open()
	{
		$name = $this->getAttr('name');
		
		if (isset($_REQUEST[$name])) {
			$value = $_REQUEST[$name];
			
			if ($value === $this->getAttr('value')) {
				$this->setAttr('checked');
				
			}else{
				$this->removeAttrsStr('checked');
			}
		}
		return parent::open(); // TODO: Change the autogenerated stub
	}
	
	public function __toString()
	{
		return $this->open();
	}
}