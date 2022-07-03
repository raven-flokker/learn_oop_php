<?php


//class User
//{
//	private $name;
//	private $surname;
//	private $patronymic;
//
//	public function __construct($name, $surname, $patronymic)
//	{
//		$this->name = $name;
//		$this->surname = $surname;
//		$this->patronymic = $patronymic;
//	}
//	public function __toString(): string
//	{
//		// TODO: Implement __toString() method.
//		return $this->name. $this->surname. $this->patronymic;
//
//	}
//
//
//	/**
//	 * @return mixed
//	 */
//	public function getName()
//	{
//		return $this->name;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getPatronymic()
//	{
//		return $this->patronymic;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getSurname()
//	{
//		return $this->surname;
//	}
//}



//class User
//{
//	private $name;
//	private $age;
//
//	public function __construct($name, $age)
//	{
//		$this->name = $name;
//		$this->age = $age;
//	}
//
//	public function __get($us)
//	{
//		return $this->$us;
//	}
//
//}


class User
{
	private $name;
	private $age;
	
	public function __set(string $property, $value): void
	{
		// TODO: Implement __set() method.
		switch ($property) {
			case 'name':
				if ($property != '') { // проверяем имя на не пустоту
					$this->$property = $value;
				}
			break;
			case 'age':
				if ($value >= 3 and $value<= 70) { // проверяем возраст
					$this->$property = $value;
				}
			break;
			default:
				//No
			break;
		}
	}
	
	public function __get($property)
	{
		return $this->$property;
	}
	
}