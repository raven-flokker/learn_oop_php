<?php


class Image extends Tag
{
	public function __construct()
	{
		$this->setAttr('src', '')->setAttr('alt');//Установим атрибут src и alt
		
		parent::__construct('img');//Вызовем конструкт родителя
	}
	
	public function __toString()
	{
		return parent::open();//Вызовем метод родителя
	}
}