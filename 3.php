<?php
/*
https://php720.com/task/7
Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
*/
$TimeHour = 0;
$TimeMinutes = 0;//переменная в которую запишем время в минутах
$APm = readline("Введите am или pm: \n");
$Degrees = readline("Введите градусы: \n");

if ($APm == "pm") {
	$TimeMinutes += 720;//12 часов = 720 минут
}

$DegreesToMinutes = $Degrees * 2;
$TimeMinutes += $DegreesToMinutes;
while ($TimeMinutes >= 60) {
	$TimeHour ++;
	$TimeMinutes -= 60;
}

echo "$Degrees градусов $APm равняется $TimeHour часов $TimeMinutes минут\n";
//test github changes
?>
