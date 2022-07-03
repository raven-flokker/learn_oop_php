<?php


class Interval
{
	private $date1;
	private $date2;
	private $interval;
	
	public function __construct(
		Date $date1,
		Date $date2
	) {
		$this->date1 = new DateTime((string) $date1);
		$this->date2 = new DateTime((string) $date2);
		$this->interval = $this->date1->diff($this->date2);
	}
	
	public function toDays()
	{
		// вернет разницу в днях
		return $this->interval->format('%R%d');
	}
	
	public function toMonths()
	{
		// вернет разницу в месяцах
		return $this->interval->format('%R%m');
	}
	
	public function toYears()
	{
		// вернет разницу в годах
		return $this->interval->format('%R%y');
	}
	
	public function __toString()
	{
		return sprintf("[
				'years' => %s,
				'months' => %s,
				'days' => %s
			]",
			$this->toYears(),
			$this->toMonths(),
			$this->toDays()
		);
	}
}