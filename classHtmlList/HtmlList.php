<?php
require_once '../classTag/Tag.php';
require_once 'ListItem.php';

class HtmlList extends Tag
{
	private $items = [];
	
	public function addItem(ListItem $item)
	{
		$this->items[] = $item;
		return $this;
	}
	
	public function show()
	{
		$result = parent::open();
		
		foreach ($this->items as $item) {
			$result .= $item;
		}
		
		$result .= parent::close();
		
		return $result;
	}
	
}