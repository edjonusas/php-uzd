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

function find_value($array,$value) {
    for ($i=0; $i < count($array); $i++ ) {
        if ($array[$i] === $value) return $i;
        return -1;
    }
}

function arr_max_prop($arr)
{
    $max_value = PHP_FLOAT_MIN;
    foreach ($arr as $key => $value) {
        if ($value > $max_value) {
            $max_value = $value;
            $max_key = $key;
        }
    }
    return $max_key;
}