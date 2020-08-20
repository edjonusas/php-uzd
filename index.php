<?php
$bowling = [
    [
        'enabled' => true,
        'pins' => [
            [1, 0, 0, 1],
            [0, 0, 1],
            [0, 1],
            [1],
        ]
    ],
    [
        'enabled' => false,
        'pins' => [
            [0, 0, 0, 0],
            [0, 0, 0],
            [0, 0],
            [0],
        ]
    ]
];

var_dump($bowling);