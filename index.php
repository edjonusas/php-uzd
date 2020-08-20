<?php

define('G', ['r' => 0, 'g' => 128, 'b' => 0]);   //Green led
define('R', ['r' => 255, 'g' => 0, 'b' => 0]);   //Red led
define('Y', ['r' => 255, 'g' => 255, 'b' => 0]); //Yellow led

$array = [
    [
        G, G, G, G, G, G, G, G
    ],
    [
        G, Y, Y, Y, Y, Y, Y, G
    ],
    [
        G, Y, R, R, R, R, Y, G
    ],
    [
        G, Y, R, Y, Y, R, Y, G
    ],
    [
        G, Y, R, Y, Y, R, Y, G
    ],
    [
        G, Y, R, R, R, R, Y, G
    ],
    [
        G, Y, Y, Y, Y, Y, Y, G
    ],
    [
        G, G, G, G, G, G, G, G
    ],
];

var_dump($array);