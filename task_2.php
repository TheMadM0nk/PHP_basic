<?php

$digits_arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function calc(array $arr): array
{
    $result = [];
    $result["Max"] = max($arr);
    $result["Min"] = min($arr);
    $result["Avg"] = array_sum($arr) / count($arr);
    return $result;
};

print_r(calc($digits_arr));