<?php
/*
https://php720.com/task/7
Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
*/
function AskDegrees(){
	$d = readline("Введите градусы от 0 до 360: \n");
	if ($d >= 0 and $d <= 360) {
		return $d;
	}
	else {
		return false;
	}
}
function DegreesToTime(){
	$t = AskDegrees();
	while ($t == false) {
		echo "Введено неверное значение градусов.\n";
		$t = AskDegrees();
	}
	echo "Ввели $t";
}
echo DegreesToTime() . "\n";
//echo AskDegrees() . "\n";

---------------------------
$a = 0;
if ($a >= 0) {
	echo "true\n";
}
else{
	echo "false\n";
}

---------------------------
$a = readline("enter:");
if ($a >= 0) {
	echo "true\n";
}
else{
	echo "false\n";
}
?>
