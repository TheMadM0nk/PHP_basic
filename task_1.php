<?php

$arr_1 = [1, 5, 9, 6, 8, 2, 7, 3, 5, 8];
$arr_2 = [8, 9, 6, 5, 7, 5, 2, 1, 3, 5];
$arr_mix = [];

foreach ($arr_1 as $key => $value) {
    $arr_mix[] = $value * $arr_2[$key];
}

print_r($arr_mix);