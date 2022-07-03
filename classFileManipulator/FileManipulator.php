<?php


class FileManipulator
{
	public function create($filePath)
	{
		// создает файл
		if (file_exists($filePath)){
			return false;
		}else{
			fopen($filePath, 'x');
			
			return true;
		}
	
	}
	
	public function delete($filePath)
	{
		// удаляет файл
		if (!file_exists($filePath)){
			return false;
		}else{
			unlink($filePath);
			return true;
		}
	}
	
	public function copy($filePath, $copyPath)
	{
		// копирует файл
		if (!file_exists($filePath)){
			return false;
		}else{
			copy($filePath, $copyPath);
			return true;
		}
		
	}
	
	public function rename($filePath, $newName)
	{
		// переименовывает файл
		// вторым параметром принимает новое имя файла (только имя, не путь)
		
		if (!file_exists($filePath)){
			return false;
		}else{
			rename($filePath, dirname($filePath). "/$newName");
			return true;
		}
	}
	
	public function replace($filePath, $newPath)
	{
		// перемещает файл
		if (!file_exists($filePath)){
			return false;
		}else{
			rename($filePath, $newPath);
			return true;
		}
	}
	
	public function weigh($filePath)
	{
		// узнает размер файла
		
		if (!file_exists($filePath)){
			return false;
		}else{
			
			return filesize($filePath);
		}
	}
}