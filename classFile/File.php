<?php
require_once 'iFile.php';

class File implements iFile
{
	private $filePath;
	
	
	
	public function __construct($filePath)
	{
		$this->filePath = $filePath;
	}
	
	public function getPath()
	{
		// TODO: Implement getPath() method.
		return $this->filePath;
	}
	
	public function getDir()
	{
		// TODO: Implement getDir() method.
		return pathinfo($this->filePath)['dirname'];
	}
	
	public function getName()
	{
		// TODO: Implement getName() method.
		return pathinfo($this->filePath)['basename'];
	}
	
	public function getExt()
	{
		// TODO: Implement getExt() method.
		return pathinfo($this->filePath)['extension'];
	}
	
	public function getSize()
	{
		// TODO: Implement getSize() method.
		return number_format(filesize($this->filePath), 0, ",", " ");
	}
	
	public function getText()
	{
		// TODO: Implement getText() method.
		return file_get_contents($this->filePath);
	}
	
	public function setText($text)
	{
		// TODO: Implement setText() method.
		file_put_contents($this->filePath, $text);
	}
	
	public function appendText($text)
	{
		// TODO: Implement appendText() method.
		file_put_contents($this->filePath, file_get_contents($this->filePath) . $text);
	}
	
	public function copy($copyPath)
	{
		// TODO: Implement copy() method.
		copy($this->filePath, $copyPath);
	}
	
	public function delete()
	{
		// TODO: Implement delete() method.
		unlink($this->filePath);
	}
	
	public function rename($newName)
	{
		// TODO: Implement rename() method.
		rename($this->filePath, pathinfo($this->filePath)['dirname'] . "/" . $newName);
	}
	
	public function replace($newPath)
	{
		// TODO: Implement replace() method.
		rename($this->filePath, $newPath . "/" . pathinfo($this->filePath)['basename']);
	}
}