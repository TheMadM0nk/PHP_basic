<?php

$taskTime_total = 0;
$taskAmount = readline("Здраствуйте! Сколько задач запланированно на сегодня(введите числовое значение)?\n");

do {
    if (is_numeric($taskAmount)) {

        $taskTable = "Количество приоритетных задач на сегодня: $taskAmount\n";
        for ($i = 1; $i <= $taskAmount; $i++) {

            $taskName = readline("Задача №$i:\n ");
            $taskTime = (int)readline("Сколько примерно времени эта задача займет? (введите числовое значение):\n ");

            $taskTable .= " $i) $taskName ({$taskTime}ч)\n";
            $taskTime_total += $taskTime;

        }
        echo $taskTable;
        echo "Примерное время выполнения плана = {$taskTime_total}ч";
        break;
    } else {
        $taskAmount = readline("Введите числовое значение: \n");
    }
} while (true);
