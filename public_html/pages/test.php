<?php

session_start();
$_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] + 1 : 1;
$user = session_id();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1><?= "Jums buvo paskirtas ID $user"; ?></h1>
<h2><?= "Jūs apsilankėte {$_SESSION['count']} kartų"; ?></h2>
</body>
</html>
