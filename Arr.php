<?php


class Arr
{
	private $numbers = [];
	
	public function add($num)
	{
		$this->numbers[] = $num;
	
		return $this;
	}
	
	public function __toString()
	{
		
		return (string) array_sum($this->numbers);
	}
	
//	public function getSum()
//	{
//		return array_sum($this->numbers);
//	}
}