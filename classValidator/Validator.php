<?php


class Validator
{
	public function isEmail($str)
	{
		// проверяет строку на то, что она корректный email
		if (filter_var($str, FILTER_VALIDATE_EMAIL)){
			return "E-mail адрес '$str' указан верно.\n";
		}else{
			return "E-mail адрес '$str' указан не верно.\n";
		}
		
	}
	
	public function isDomain($str)
	{
		// проверяет строку на то, что она корректное имя домена
		if (filter_var($str, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME)) {
			return $str . ' Является доменом';
		}else{
			return $str . ' Не является доменом';
		}
	}
	
	public function inRange($num, $from, $to)
	{
		// проверяет число на то, что оно входит в диапазон
		$option = array(
			'options' => array(
				'min_range' => $from,
				'max_range' => $to,
			)
		);
		if ((filter_var($num, FILTER_VALIDATE_INT, $option)) !== FALSE) {
			return "Число '$num' является верным (от '$from' и '$to').";
		}else{
			return "Число '$num' является не верным (от '$from' и '$to').";
		}
	}
	
	public function inLength($str, $from, $to)
	{
		// проверяет строку на то, что ее длина входит в диапазон
		$fiap = strlen($str);
		$option = array(
			'options' => array(
				'min_range' => $from,
				'max_range' => $to,
			)
		);
		if ((filter_var($fiap, FILTER_VALIDATE_INT, $option)) !== FALSE) {
			return "Длинна строки '$str' является верным (от '$from' и '$to').";
		}else{
			return "Длинна строки '$str' является не верным (от '$from' и '$to').";
		}
	}
}