<?php
require_once 'iTag.php';

class Tag implements iTag
{
	private $name;
	private $attrs = [];
	public $text = '';
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	// Возвращает название тега(значение свойства name)
	public function getName()
	{
		// TODO: Implement getName() method.
		return $this->name;
	}
	
	// Возвращает текст нашуго тега(значение свойства text)
	public function getText()
	{
		// TODO: Implement getText() method.
		return $this->text;
	}
	
	//Возвращает массив атрибутов тега(значение attrs)
	public function getAttrs()
	{
		// TODO: Implement getAttrs() method.
		return $this->attrs;
	}
	
	//Параметром принимающий имя атрибута и возвращающий значение этого атрибута (а если такого атрибута нет - то null).
	public function getAttr($name)
	{
		// TODO: Implement getAttr() method.
		if (isset($this->attrs[$name])) {
			return $this->attrs[$name];
		}else{
			return null;
		}
	}
	
	// Открывающий тег, текст и закрывающий тег
	public function show()
	{
		// TODO: Implement show() method.
		return $this->open() . $this->text . $this->close();
	}
	
	public function setText($text)
	{
		// TODO: Implement setText() method.
		$this->text = $text;
		return $this;
	}
	
	// Реализуем метод для атрибутов:
	public function setAttr($name, $value = true)
	{
		$this->attrs[$name] = $value;
		return $this;
	}
	
	//Аналогично методу setAttr, параметром принимает массив атрибутов
	public function setAttrs($attrs)
	{
		foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		
		return $this;
	}
	
	// Выводим открывающую часть тега:
	public function open()
	{
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);
		
		return "<$name$attrsStr>";
	}
	
	// Выводим закрывающую часть тега:
	public function close()
	{
		$name = $this->name;
		return "</$name>";
	}

	public function addClass($className)
	{
		//Если ключа class нет в массиве $this->attrs:
		if (isset($this->attrs['class'])) {
			//Получаем массив классов
			$classNames = explode(' ', $this->attrs['class']);
			
			//Если такого класса нет в массиве
			if (!in_array($className, $classNames)) {
				//Добавляем новый класс
				$classNames[] = $className;
				
				// Сольем массив в строку и запишем ее в $this->attrs['class']:
				$this->attrs['class'] = implode(' ', $classNames);
			}
			
		}else{
			$this->attrs['class'] = $className;
		}
		return $this;
		
	}
	
	//Реализация метода, удаление класса
	public function removeClass($className)
	{
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);
			
			if (in_array($className, $classNames)) {
				$classNames = $this->removeElem($className, $classNames);
				$this->attrs['class'] = implode(' ', $classNames);
			}
		}
		return $this;
	}
	
	public function removeAttrsStr($name)
	{
		unset($this->attrs[$name]);
		return $this;
	}
	
	public function __toString()
	{
		return $this->show();
	}
	
	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				//Если значение атрибута равно true:
				if ($value === true) {
					$result .= " $name"; //Это атрибут без значения
				}else{
					$result .= " $name=\"$value\"";//Атрибут со значением
				}
				
			}
			
			return $result;
		}else{
			
			return '';
		}
	}
	
	private function removeElem($elem, $arr)
	{
		$key = array_search($elem, $arr);//Находим ключ элемента по тексту
		
		array_splice($arr, $key, 1);// Удаляем элемент
		
		return $arr;// Возвращаем измененный массив
	}
}