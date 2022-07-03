<?php
require_once 'File.php';


$file = new File('file.txt');

echo $file->getPath();
echo '<br>';
echo $file->getDir();
echo '<br>';
echo $file->getName();
echo '<br>';
echo $file->getExt();
echo '<br>';
echo $file->getSize();
echo '<br>';
echo $file->getText();
echo '<br>';
$file->setText('Новый текст');
echo '<br>';
$file->appendText('End');
$file->copy('file.txt');
//$file->delete();
//$file->rename('file2');
//$file->replace('intr');