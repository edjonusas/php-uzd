<?php

use App\Pixels\Pixel;

require '../bootloader.php';
$pixel = new Pixel();
//$pixel_data = \App\App::$db->getRowWhere('pixels');

//$pixel->setX(23);
//$pixel->setY(123);
//$pixel->setColor('red');
//$pixel->setUserName('Edd');
//
//var_dump($pixel);



$navigation = generate_nav();

if (App\App::$db->tableExists('pixels')) {
    $pixels = App\App::$db->getRowsWhere('pixels', []);
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <?php include ROOT . '/core/templates/nav.tpl.php'; ?>
</header>
<div class="wall">
    <?php foreach ($pixels ?? [] as $pixel) : ?>
		<span class="pixel"
			      style=" bottom: <?php print $pixel['y'] ?>px;
					      left: <?php print $pixel['x'] ?>px;
					      width: <?php print $pixel['pixel_size'] ?>px;
					      height: <?php print $pixel['pixel_size'] ?>px;
					      background-color: <?php print $pixel['colour'] ?>;">
		</span>
    <?php endforeach; ?>
</div>
</body>
</html>

