<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Ivanova Aleksandra' => 2,
        'Miroxin Anton' => 2
    ],

    'БАП20' => [
        'Антонов Антон' => 4,
        'Gusev Denis' => 5,
        'Lebedev Andrey' => 3,
        'Zlobin Vadim' => 2,
        'Gav Vlad' => 2,
        'Petrov Oleg' => 5
    ]
];

$groups_average_marks = [];
$exclusion_students = [];

foreach ($students as $group_name => $group_list) {
    $groups_average_marks[$group_name] = $marks_average = 0;

    foreach ($group_list as $student => $marks) {
        if ($marks < 3) {
            $exclusion_students[$group_name][$student] = $marks;
        }

        $marks_average += $marks;
        $groups_average_marks[$group_name] = $marks_average / count($group_list);
    }
}

foreach ($groups_average_marks as $group_name => $value) {
    if (max($groups_average_marks) == $value) {
        echo "Группа с наибольшей успеваемостью - $group_name\n";
    }
}

echo "Список на исключение:\n";
print_r($exclusion_students);