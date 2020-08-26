<?php

if (isset($_POST['size'])) {
    $input_value = $_POST['size'];
} else {
    $input_value = 150;
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
	<style>
        .img {
            background-image: url("https://www.johnnyseeds.com/dw/image/v2/BBBW_PRD/on/demandware.static/-/Sites-jss-master/default/dw22620c58/images/products/vegetables/00053_01_brilliantfield.jpg?sw=387&cx=226&cy=0&cw=1196&ch=1196");
            background-size: cover;
        }
	</style>
</head>

<body>
<form method="post">
	<input type="range" min="100" max="200" value="<?= $input_value; ?>" name="size">
	<button name="submit">Submit</button>
</form>
<div class="img"
     style=" width:<?= $input_value; ?>px; height:<?= $input_value; ?>px"></div>
</body>
</html>