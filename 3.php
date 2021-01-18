<?php

class AskAmPm{
	public $APm;
	public function AskUser(){
		$TempAPm = readline("Введите am или pm: \n");
		if ($TempAPm == "am" or $TempAPm == "pm"){
			$this -> APm = $TempAPm;
		}
		else{
			$this -> APm = false;
		}
	}
}

class AskDegrees{
	public $Degrees;
	public function AskUser(){
		$TempDegrees = readline("Введите градусы от 0 до 360: \n");
		$IsNum = is_numeric($TempDegrees);
		if ($TempDegrees >= 0 and $TempDegrees <= 360 and $IsNum == true){
			$this -> Degrees = $TempDegrees;
		}
		else{
			$this -> Degrees = false;
		}
	}
}

class ChangeTimeFormat{
	public $hour = 0;
	public $minutes = 0;
	public $SumMin = 0;

	public function __construct($ChApm, $ChD){
		if ($ChApm == "pm") {
			$this -> SumMin += 720;
		}
		$this -> SumMin += $ChD * 2;
		//echo $this -> SumMin . "\n";
		while ($this -> SumMin >= 60) {
			$this -> hour ++;
			$this -> SumMin -= 60;
		}
		$this -> minutes = $this -> SumMin;
	}
}

class Main{
	public function __construct(){
		//Создаем объекты из классов AskAmPm, AskDegrees
		$objAskAmPm = new AskAmPm();
		$objAskDegrees = new AskDegrees();

		//am or pm
		$objAskAmPm -> AskUser();
		while ( $objAskAmPm -> APm === false) {
			echo "Введен неверный формат времени.\n";
			$objAskAmPm -> AskUser();
		}

		//спрашиваем градусы
		$objAskDegrees -> AskUser();
		while ( $objAskDegrees -> Degrees === false) {
			echo "Введено неверное значение градусов.\n";
			$objAskDegrees -> AskUser();
		}

		//Создаем объекты из классa ChangeTimeFormat
		$objChangeTimeFormat = new ChangeTimeFormat($objAskAmPm -> APm, $objAskDegrees -> Degrees);
		echo "часов " . $objChangeTimeFormat -> hour . " минут " . $objChangeTimeFormat -> minutes . "\n";
	}
}

$objMain = new Main();
?>
