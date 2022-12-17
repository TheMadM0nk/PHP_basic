<?php

$digits_arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$odd_even = function ($arr) {
    array_map(function (int $number){
        if($number & 1) {
            echo "Нечетное!\n";
        } else {
            echo "Четное!\n";
        }
    },$arr);
};

$odd_even($digits_arr);