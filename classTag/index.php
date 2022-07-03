<?php
require_once 'Tag.php';
require_once 'Image.php';

//ctrl+u можно увидеть HTML код

//$tag = new Tag('title');
//echo $tag->open();
//echo 'eee';
//echo $tag->close();
//
//$tag = new Tag('header');
//echo $tag->open() . 'header - сайта' . $tag->close();
//
//$tag = new Tag('input');
//echo $tag
//	->setAttr('disabled', true)
//	->open();
//echo 'text';
//echo $tag->close(); // выведет <input>
//
//$tag = new Tag('img');
//
//echo $tag->setAttr(' src', 'img.png')->open();
//echo $tag->close();
//
//$tag =new Tag('div');
//echo $tag->setAttrs([' id' => 'test1', 'class' => 'rrrr'])
//	->setAttr(' type', 'text')
////	->removeAttrsStr('id')
//	->open();
//echo 'rrrrr';
//echo $tag->close();
//
//$tag = new Tag('div');
//echo $tag->open() . 'text' . $tag->close();
////' src' => 'img.png'

//echo (new Tag('input'))
//	->setAttr('name', 'name1')
//	->open();
//echo (new Tag('input'))
//	->setAttr('name', 'name2')
//	->open();

//echo (new Tag('div'))->addClass('eee')->open();
////echo (new Tag('input'))->addClass('eee')->
////addClass('bbb')->open();
//
//echo (new Tag('input'))
//	->setAttr('class', 'eee bbb')
//	->addClass('kkk')->open();
//
//echo (new Tag('input'))
//	->setAttr('class', 'eee bbb')
//	->addClass('eee') // такой класс уже есть и не добавится
//		->open();
//
//echo (new Tag('input'))
//	->addClass('eee')
//	->addClass('bbb')
//	->addClass('eee') // такой класс уже есть и не добавится
//		->open();


echo (new Tag('input'))
	->setAttr('class', 'eee zzz kkk')
	// добавим 3 класса
	->removeClass('zzz') // удалим класс 'zzz'
	->open(); // выведет <input class="eee kkk">

echo (new Image())
	->setAttr('src', 'img.png')
	->setAttr('width', '300')
	->setAttr('height', 200)
	->open();

$image = (new Image())->setAttr('src', 'img.png');

$image->setAttr('width', '200');
echo $image;














