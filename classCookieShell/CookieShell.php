<?php


class CookieShell
{
	public function set($name, $value, $time)
	{
		// устанавливает куки
		// $time задает время в сек, через сколько кука умрет
		setcookie($name, $value, time() + $time);
		$_COOKIE[$name] = $value;
	}
	
	public function get($name)
	{
		// получает куки
		return $_COOKIE[$name];
	}
	
	public function del($name)
	{
		// удаляет куки
		
		setcookie($name, '', time());
		unset($_COOKIE[$name]);
	}
	
	public function exists($name)
	{
		// проверяет наличие куки
		
		return isset($_COOKIE[$name]);
	}
}