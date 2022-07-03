<?php


class Date
{
	public $year;
	public $mounth;
	public $day;
	
	public function __get($property)
	{
		if ($property == 'weekDay') {
			$date =  $this->day . '-' . $this->mounth . '-' . $this->year;
			$days = [
				'Воскресенье',
				'Понедельник',
				'Вторник',
				'Среда',
				'Четверг',
				'Пятница',
				'Суббота'
			];
			$result = $days[date('w', strtotime($date))];
			return $result;
		}
	
	}
	
	
}