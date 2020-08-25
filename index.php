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
    ],
    'hud' => [
        'time' => date('H:i', strtotime("3 hours")),
        'armor' => rand(1, 100),
        'health' => rand(1, 100),
        'weapon' => [
            [
                'name' => 'breaker',
                'ammo' => 'infinite'
            ],
            [
                'name' => 'katana',
                'ammo' => 'infinite'
            ],
            [
                'name' => 'knife',
                'ammo' => 'infinite'
            ],
            [
                'name' => 'm4',
                'ammo' => '120'
            ],
        ],
        'money' => 100,
        'wanted' => 0,
    ]
];

$fire_count = 0;

foreach ($game['objects'] as $key => $object) {

    $object['on_fire'] = rand(true, false);
    $object['on_fire'] ? ++$fire_count : 0;

    $object['is_target'] = !$object['on_fire'];
    $object['class'] .= ' ' . ($object['on_fire'] ? 'fire' : 'target');

    $game['objects'][$key] = $object;
}

//money
$money_count = 13000 + 520 * $fire_count;
$length = 8; //digits
$game['hud']['money'] = '$' . substr(str_repeat(0, $length) . $money_count, -$length);

//wanted level
$game['hud']['wanted'] = $fire_count;


$active_weapon = $game['hud']['weapon'][rand(0, count($game['hud']['weapon']) - 1)]['name'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://allfont.net/allfont.css?fonts=pricedown" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="bg">
    <div class="hud">
        <div>
            <div>
                <div class="weapon <?= $active_weapon; ?>"></div>
            </div>
            <div class="time-armor-col">
                <div><?= $game['hud']['time'] ?></div>
                <div class="armor-bar">
                    <div class="armor-bar-line" style="width: <?= $game['hud']['armor'] ?>%"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="health-bar">
                <div class="health-bar-line" style="width: <?= $game['hud']['health'] ?>%"></div>
            </div>
            <div class="money"><?= $game['hud']['money']; ?></div>
            <div class="star-block">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <span class="<?= $game['hud']['wanted'] < $i ? 'star-empty' : 'star'; ?>"></span>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php foreach ($game['objects'] as $object): ?>
        <div class="object <?php print $object['class']; ?>"
             style=" left:<?= $object['x']; ?>% ; top: <?= $object['y']; ?>vh">>
        </div>
    <?php endforeach; ?>
</body>
</html>