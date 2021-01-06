<?php
/*
https://php720.com/task/7
Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
*/
function AskAmPm() {
	$apm = readline("Введите am или pm: \n");
	if ($apm == "am" or $apm == "pm") {
		return $apm;
	}
	else{
		return false;
	}
}

function AskDegrees() {
	$d = readline("Введите градусы от 0 до 360: \n");
	$IsNum = is_numeric($d);//проверка введено ли число(при вводе пустой строки выходила ошибка)
	if ($d >= 0 and $d <= 360 and $IsNum == true) {
		return $d;
	}
	else{
		return false;
	}
}

function ChangeTimeFormat($ChApm, $ChD) {
	$hour = 0;
	$minutes = 0;
	$SumMin = 0;
	if ($ChApm == "pm") {
		$SumMin = 720;//pm - 12 часов = 720 минут
	}
	$SumMin += $ChD * 2;// к минутам прибавляем градусы переведенные в минуты(1 градус = 2 минуты)
	while ($SumMin >= 60) {
		$hour ++;
		$SumMin -= 60;
	}
	$minutes = $SumMin;
	return ['hour' => $hour, 'minutes' => $minutes];//функция возвращает ассоциативный массив
}

function main() {
	$AmPm = AskAmPm();
	while ($AmPm === false) {//проверяем правильность формата времени
		echo "Введен неверный формат времени.\n";
		$AmPm = AskAmPm();
	}
	$Degrees = AskDegrees();
	while ($Degrees === false) {//проверяем правельность значения градусов
		echo "Введено неверное значение градусов.\n";
		$Degrees = AskDegrees();
	}
	$TimeArr = ChangeTimeFormat($AmPm, $Degrees);
	echo "Часов $TimeArr[hour] минут $TimeArr[minutes]\n";
}

main();
?>
