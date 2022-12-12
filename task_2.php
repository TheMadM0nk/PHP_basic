<?php

$wish_noun = [
    'счастья',
    'денег',
    'здоровья',
    'веселья',
    'краба',
    'змея'
];

$wish_adjective = [
    'много',
    'безграничного',
    'неземного',
    'крепкого',
    'зеленого',
    'красного'
];

$user_name = readline("Как вас зовут? ");
$name  = $user_name ?: 'именинник';
$punctuation = '';
$wish_sentence = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ";
$wish_list = [];

for ($i = 1; $i <= 3; $i++){
    $noun_key = array_rand($wish_noun, 1);
    $adjective_key = array_rand($wish_adjective, 1);

    if ($i == 2) {
        $punctuation = ' и ';
    } elseif ($i == 3) {
        $punctuation = '!';;
    } else {
        $punctuation = ', ';;
    }

    $wish_list[] = $wish_adjective[$adjective_key] . " " . $wish_noun[$noun_key] . $punctuation;

    unset($wish_noun[$noun_key]);
    unset($wish_adjective[$adjective_key]);
}

echo $wish_sentence .= implode($wish_list);