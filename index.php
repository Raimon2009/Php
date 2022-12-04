<?php
// Первое задание:
// $userName = readline("Как вас зовут?\n");
// $userAge = readline("Сколько вам лет?\n");
// echo "Вас зовут $userName. Вам $userAge лет";

// Второе задание:
$userName = readline("Как вас зовут?");
$userTarget1 = readline("Какая задача стоит перед вами сегодня?");
$userTime1 = readline("Сколько примерно времени эта задача займет?");
$userTarget2 = readline("Какая задача стоит перед вами сегодня?");
$userTime2 = readline("Сколько примерно времени эта задача займет?");
$userTarget3 = readline("Какая задача стоит перед вами сегодня?");
$userTime3 = readline("Сколько примерно времени эта задача займет?");
$sumTime = $userTime1 + $userTime2 + $userTime3;

echo "$userName, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $userTarget1 ($userTime1)\n
- $userTarget2 ($userTime2)\n
- $userTarget3 ($userTime3)\n
Примерное время выполнение задач ($sumTime)";

?>