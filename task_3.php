<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];


//function search(string $request, array $arr)
//{
//    foreach ($arr as $value) {
//        if (is_array($value)) {
//            search($request, $value);
//        } else {
//            if ($request === $value) {
//                echo "true\n";
//            } else {
//                echo "false\n";
//            }
//        }
//    }
//}

function search(string $request, array $arr)
{
    $result = in_array($request, $arr);

    foreach ($arr as $value) {
        if (is_array($value)) {
            search($request, $value);
        }
    }
    echo $result;
}

search('Тетрадь', $box);
