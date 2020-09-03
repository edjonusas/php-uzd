<?php

function arr_unique_values($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] === $array[$j]) return false;
        }
    }
    return true;
}

function find_repetitive_value($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] === $array[$j]) return $j;
        }
    }
    return true;
}


function arr_map($array, $map_function)
{
    $mapped_arr = [];
    foreach ($array as $el) {
        $mapped_arr[] = $map_function($el);
    }
    return $mapped_arr;
}