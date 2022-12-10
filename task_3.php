<?php

$user_input = (int)readline('Введите число от 1 и выше: ');
$error = "Невенрное значение";
if ($user_input == 0) {
    echo $error;
} else {
    $finger_number = $user_input % 8;
    $message = "Палец номер";

    switch ($finger_number) {
        case 1:
            echo "$message 1";
            break;
        case 2:
        case 0:
            echo "$message 2";
            break;
        case 3:
        case 7:
            echo "$message 3";
            break;
        case 4:
        case 6:
            echo "$message 4";
            break;
        case 5:
            echo "$message 5";
            break;
        default:
            echo $error;
    };
}
