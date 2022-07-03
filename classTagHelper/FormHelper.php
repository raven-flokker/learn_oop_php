<?php
require_once 'TagHelper.php';
require_once '../classTag/Tag.php';

class FormHelper extends TagHelper
{
	public function openForm($attrs = [])
	{
		return $this->open('form', $attrs);
	}
	
	public function closeForm()
	{
		return $this->close('form');
	}
	
	public function input($attrs = [])
	{
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
		}
		
		if (isset($_REQUEST[$name])) {
			$attrs['value'] = $_REQUEST[$name];
		}
		
		return $this->open('input', $attrs);
	}
	
	public function password($attrs = [])
	{
		$attrs['type'] = 'password';
		return $this->input($attrs);
	}
	
	public function hidden($attrs = [])
	{
		$attrs['type'] = 'hidden';
		return $this->open('input', $attrs);
	}
	
	public function submit($attrs = [])
	{
		$attrs['type'] = 'submit';
		return $this->open('input', $attrs);
	}
	
	public function checkbox($attrs = [])
	{
		$attrs['type'] = 'checkbox';
		$attrs['value'] = 1;
		
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
				$attrs['checked'] = true;
			}
			
			$hidden = $this->hidden([
				'name' => $name,
				'$value' => '0'
				]
			);
			
		}else{
			$hidden = '';
		}
		
		return $hidden . $this->open('input', $attrs);
	}
	
	public function textarea($text, $attrs = [])
	{
		$attrs['name'] = 'textarea';
		$name = $attrs['name'];
		
			if (isset($_REQUEST[$name])) {
				$text = $_REQUEST[$name];
			}
		
		
		return $this->open('textarea', $attrs). $text.$this->close('textarea');
	}
	
	public function select($attrs, $options)
	{
		$select = (new Tag('select'))->setAttrs($attrs);
		$arrOption = [];
		
		foreach ($options as $option) {
			$arrOption[] = (new Tag('option'))->setText($option['text'])->setAttrs($option['attrs']);
			$result = $select->open();
		}
		
		$name = $select->getAttr('name');
		if (isset($_REQUEST[$name])) {
			$selected = $_REQUEST[$name];
			foreach ($arrOption as $option) {
				if ($selected == $option->getAttr('value')) {
					$option->setAttr('selected');
				}else{
					$option->removeAttrsStr('selected');
				}
				$result .= $option;
			}
		}else{
			foreach ($arrOption as $option){
				$result .= $option;
			}
			$result .= $select->close();
		}
		return $result;
	}
}