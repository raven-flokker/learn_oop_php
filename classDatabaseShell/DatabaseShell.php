<?php


class DatabaseShell
{
	private $link;
	
	public function __construct($host,
		$user, $password, $database)
	{
		$this->link = mysqli_connect($host, $user, $password, $database);
		mysqli_query($this->link, "SET NAMES 'utf8'");
	}
	
	public function save($table, $data)
	{
		// сохраняет запись в базу
		$query = "INSERT INTO $table SET ";
		
		foreach ($data as $name => $value) {
			$query .= " $name=\"$value\", ";
		}
		
		$query = substr(trim($query, ', '), 0, strlen($query) - 1);
		//echo $query;
		$result = mysqli_query($this->link, $query);
		
		if ($result == false){
			return 'Bad';
		}else{
			return $result;
//			echo 'ok';
			//var_dump($result);
		}
//		return mysqli_query($this->link, $query);
		
	}
	
	public function del($table, $id)
	{
		// удаляет запись по ее id
		$query = "DELETE FROM $table WHERE id = $id";
		$result = mysqli_query($this->link, $query);
		if ($result == false){
			return 'Bad';
		}else{
			return $result;
			//var_dump(mysqli_query($this->link, $query));
		}
		//return mysqli_query($this->link, $query);
	}
	
	public function delAll($table, $ids)
	{
		// удаляет записи по их id
		$query = "DELETE FROM $table WHERE id IN (";
		
		foreach ($ids as $id) {
			$query .= "$id, ";
		}
		
		$query = substr($query, 0, strlen($query) -2).')';
		return mysqli_query($this->link, $query);
	}
	
	public function get($table, $id)
	{
		// получает одну запись по ее id
		$query = "SELECT * FROM $table WHERE id = $id";
		$result = mysqli_query($this->link, $query);

		if ($result == false){
			return 'Bad';
		}else{
			$result = mysqli_fetch_assoc($result);
			
			return $result;
			//var_dump(mysqli_query($this->link, $query));
		}
		//return mysqli_fetch_assoc($result);
	}
	
	public function getAll($table, $ids)
	{
		// получает массив записей по их id
		$query = "SELECT * FROM $table WHERE id IN (";
		foreach ($ids as $id) {
			$query .= "$id, ";
		}
		
		$query = substr($query, 0, strlen($query) - 2).')';
		echo $query;
		$result = mysqli_query($this->link, $query);
		var_dump($result);
		
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
		return $data;
	}
	
	public function selectAll($table, $condition)
	{
		// получает массив записей по условию
		
		$query = "SELECT * FROM $table $condition";
		$result = mysqli_query($this->link, $query);
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
		return $data;
	}
}