<?php

$game = [
    'objects' => [
        [
            'x' => 50,
            'y' => 80,
            'class' => 'car'
        ],
        [
            'x' => 23,
            'y' => 80,
            'class' => 'ballas'
        ],
        [
            'x' => 40,
            'y' => 80,
            'class' => 'cop-car'
        ],
        [
            'x' => 60,
            'y' => 78,
            'class' => 'vagos'
        ],
    ]
];

https://i.pinimg.com/originals/03/c9/de/03c9de444b1f392ed18e67ea0d7d7aac.png

foreach ($game['objects'] as $key => $object) {
    $game['objects'][$key]['on_fire'] = rand(0, 1) ? 'fire' : '';
    if ($game['objects'][$key]['on_fire'] === 'fire') {
        $game['objects'][$key]['is_target'] = '';
    } else {
        $game['objects'][$key]['is_target'] = 'target';
    }
}
var_dump($game);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="bg">
    <?php foreach ($game['objects'] as $object): ?>
        <div class="<?= $object['class'] . " " . $object['on_fire'] . " " . $object['is_target'] ?>"
             style=" left:<?= $object['x'] ?>% ; top: <?= $object['y'] ?>vh"></div>
    <?php endforeach; ?>
</div>
</body>
</html>