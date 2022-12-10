<?php

do {

    $user_input = (int)readline("«В каком году произошло крещение Руси?». \nВарианты:\n 810\n 988\n 740\n");

    if ($user_input === 988) {
        echo "Правильно, Поздравляю!\n\n";
        break;
    } elseif ($user_input === 810 || $user_input === 740) {
        echo "Ответ не верный!\n\n";
        break;
    } else {
        echo "Введите один из предложенных вариантов!\n\n";
    }
} while (true);

