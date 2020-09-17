<?php
require '../bootloader.php';


$navigation = generate_nav();

$db = new FileDB(DB_FILE);
$db->load();
if ($db->tableExists('pixels')) {
    $pixels = $db->getRowsWhere('pixels', []);
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
		      style=" top: <?php print $pixel['y']*10 ?>px;
				      left: <?php print $pixel['x']*10 ?>px;
				      background-color: <?php print $pixel['colour'] ?>;">
		</span>
    <?php endforeach; ?>
</div>
</body>
</html>

