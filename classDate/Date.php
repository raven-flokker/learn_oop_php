<?php


class Date
{
	private $date;
	private $currentDate;
	private $timeZone = 'Europe/Moscow';
	public $formatStr = 'Y-m-d';
	
	const WEEKDAYS = [
		'ru' => [
			'Воскресенье',
			'Понедельник',
			'Вторник',
			'Среда',
			'Четверг',
			'Пятница',
			'Суббота'
		],
		'en' => [
			'Sunday',
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday'
		]
	];
	const MONTH = [
		'ru' => [
			'Январь',
			'Февраль',
			'Март',
			'Апрель',
			'Май',
			'Июнь',
			'Июль',
			'Август',
			'Сентябрь',
			'Октябрь',
			'Ноябрь',
			'Декабрь'
		],
		'en' => [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		]
	];
	
	public function __construct($date = null)
	{
		// если дата не передана - пусть берется текущая
//		if (!$date) {
//			echo date('Y-m-d');
//		}
//		$this->date = $date;
		
		if (!is_null($date))
		{
			$this->currentDate = $date;
			$this->date = new DateTime(
				$this->currentDate,
				new DateTimeZone($this->timeZone)
			);
		} else {
			$this->date = new DateTime(
				$time = 'now',
				new DateTimeZone($this->timeZone)
			);
			$this->currentDate = $this->format($this->formatStr);
		}
		
	}
	
	public function getDay()
	{
		// возвращает день
		return 'Day: ' . $this->date->format('d');
	}
	
	public function getMonth($lang = null)
	{
		// возвращает месяц
		// переменная $lang может принимать значение ru или en
		
		// если эта не пуста - пусть месяц будет словом на заданном языке
		if (is_null($lang)) {
			return 'Month: ' . $this->date->format('m');
		}
		if (!is_null($lang) and $lang == 'ru' or $lang = 'en') {
			return 'Month: ' . self::MONTH[$lang][($this->date->format('n'))];
		}
		
	}
	
	public function getYear()
	{
		// возвращает год
		return 'Year: ' . $this->date->format('Y');
	}
	
	public function getWeekDay($lang = null)
	{
		// возвращает день недели
		// переменная $lang может принимать значение ru или en
		// если эта не пуста - пусть день будет словом на заданном языке
		if (is_null($lang)) {
			return 'WeekDay: ' . $this->date->format('N');
		}
		if (!is_null($lang) and $lang == 'ru' or $lang = 'en') {
			return 'WeekDay: ' . self::WEEKDAYS[$lang][($this->date->format('N'))];
		}
	}
	
	public function addDay($value)
	{
		// добавляет значение $value к дню
		$this->date->add(new DateInterval('P' . $value . 'D'));
		return $this;
	}
	
	public function subDay($value)
	{
		// отнимает значение $value от дня
		$this->date->sub(new DateInterval('P' . $value . 'D'));
		return $this;
	}
	
	public function addMonth($value)
	{
		// добавляет значение $value к месяцу
		$this->date->add(new DateInterval('P' . $value . 'M'));
		return $this;
	}
	
	public function subMonth($value)
	{
		// отнимает значение $value от месяца
		$this->date->sub(new DateInterval('P' . $value . 'M'));
		return $this;
	}
	
	public function addYear($value)
	{
		// добавляет значение $value к году
		$this->date->add(new DateInterval('P' . $value . 'Y'));
		return $this;
	}
	
	public function subYear($value)
	{
		// отнимает значение $value от года
		$this->date->sub(new DateInterval('P' . $value . 'Y'));
		return $this;
	}
	
	public function format($format)
	{
		// выведет дату в указанном формате
		// формат пусть будет такой же, как в функции date
		return $this->date->format($format);
	}
	
	public function __toString()
	{
		// выведет дату в формате 'год-месяц-день'
		
		return $this->format($this->formatStr);
	}

}