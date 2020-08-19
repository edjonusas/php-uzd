<?php

$distance = rand(1000, 2000);
$consumtion = 7.5 / 100;
$price_l = 1.3;
$fuel_total = $distance * $consumtion;
$trip_price = $fuel_total * $price_l;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trip</title>
</head>
<body>
<h1>Keliones skaiciuokle</h1>
<ul>
    <li>Nuvaziuota distancija: <?php print $distance; ?></li>
    <li>sunaudota : <?php print $fuel_total; ?></li>
    <li>kaina : <?php print $trip_price; ?></li>
</ul>
</body>
</html>