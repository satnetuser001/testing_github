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

$objAskAmPm = new AskAmPm();
$objAskAmPm -> AskUser();
echo $objAskAmPm -> APm . "\n";
var_dump($objAskAmPm -> APm) . "\n";


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
$objAskDegrees = new AskDegrees();
$objAskDegrees -> AskUser();
echo $objAskDegrees -> Degrees . "\n";
var_dump($objAskDegrees -> Degrees) . "\n";


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

$objChangeTimeFormat = new ChangeTimeFormat("pm", 2);
echo $objChangeTimeFormat -> hour . "\n";
echo $objChangeTimeFormat -> minutes . "\n";


class Main{
	//Создаем объекты из всех классов
	$objAskAmPm = new AskAmPm();
	$objAskDegrees = new AskDegrees();
	$objChangeTimeFormat = new ChangeTimeFormat("pm", 2);

	
	$objAskAmPm -> AskUser();
}
?>
