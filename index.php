<?php
function beer() {
    $money = rand(3,15);
    $beer_cost = 3;
    $total = 0;
    $full_glass = '<div class="beer-full"></div>';
    $empty_glass = '<div class="beer-empty"></div>';
    $all_time = 0;
    for ($i = 1;$beer_cost <= $money; $i++ ) {
        $time = rand(20,30);
        $all_time += $time;
        $bokal_time = date('H:i',strtotime("$all_time minutes"));
        $money -= $beer_cost;
        $total += $beer_cost;
        print '<div>' . $total . '</div>';
        print '<div>' . $bokal_time . '</div>';
        if ($i === 1) {
            print $full_glass;
        } else {
            print str_repeat($empty_glass, $i-1) . $full_glass;
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trip</title>
    <style>
        .beer-full {
            display: inline-block;
            width: 200px;
            height: 200px;
            background-image: url("https://www.horiba.com/fileadmin/_processed_/csm_01_02-2019_Beer_Brewing_53ef2818e5.png");
            background-size: cover;
        }
        .beer-empty {
            display: inline-block;
            width: 200px;
            height: 200px;
            background-image: url("https://image.shutterstock.com/image-photo/empty-beer-glass-on-isolated-260nw-671366509.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
    <main>
        <?php beer() ?>
    </main>
</body>
</html>