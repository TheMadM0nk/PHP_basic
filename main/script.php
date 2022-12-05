<?php

$name = readline('Здраствуйте, как вас зовут? ');
$age = (int)readline('Укажите ваш возраст ');

echo "
Вас зовут $name, вам $age лет.\n";

$questionMain = 'Какие задачи стоят перед вами сегодня?';
$questionTask = "Задача №";
$questionTime = 'Сколько примерно времени эта задача займет? (Ответ укажите числом) ';
$counter = 1;

echo "
$questionMain ";

$taskNumber_1 = readline("$questionTask $counter ");
$taskTime_1 = (int)readline("$questionTime ");
{$counter++;}

$taskNumber_2 = readline("$questionTask $counter ");
$taskTime_2 = (int)readline("$questionTime ");
{$counter++;}

$taskNumber_3 = readline("$questionTask $counter ");
$taskTime_3 = (int)readline("$questionTime ");

$taskTime_total = $taskTime_1 + $taskTime_2 + $taskTime_3;

echo "
$name, сегодня у вас запланировано $counter приоритетных задачи на день:
 - $taskNumber_1 ({$taskTime_1}ч)
 - $taskNumber_2 ({$taskTime_2}ч)
 - $taskNumber_3 ({$taskTime_3}ч)
Примерное время выполнения плана = {$taskTime_total}ч.";