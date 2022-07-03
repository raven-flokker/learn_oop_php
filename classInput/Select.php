<?php


class Select extends Tag
{
	private $options = [];
	
	public function __construct()
	{
		parent::__construct('select');
	}
	
	public function add(Option $option)
	{
		$this->options[] = $option;
		return $this;
	}
	
	public function show()
	{
		$result = $this->open();
		$name = $this->getAttr('name');
		
		if (isset($_REQUEST[$name])) {
			$selected = $_REQUEST[$name];
			
			foreach ($this->options as $option) {
				if ($selected == $option->getText()) {
					$option->setSelected();
				} else {
					$option->removeAttrsStr('selected');
				}
				$result .= $option;
			}
		}else{
			foreach ($this->options as $option) {
				$result .= $option;
			}
			
		}
		
		$result .= $this->close();
		return $result;
	}
	
}