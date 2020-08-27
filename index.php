<?php

if (isset($_POST['submit'])) {
    $sertificat = [
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'age' => $_POST['age']?: "secretna",
        'department' => $_POST['department'],
    ];
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
	<link rel="stylesheet" href="style.css">
</head>

<body>
<!--Ment form-->
<?php if (!isset($_POST['submit'])) : ?>
	<form class="form" method="POST" style="display: block">
		<div class="form__title">Gopnik registration for Ment position</div>
		<div class="input-group">
			<label for="name">Name *</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div class="input-group">
			<label for="surname">surname *</label>
			<input type="text" id="surname" name="surname" required>
		</div>
		<div class="input-group">
			<label for="age">Age</label>
			<input type="text" id="age" name="age">
		</div>
		<div class="input-group">
			<label for="department">department</label>
			<select name="department" id="department">
				<option value="Beginner ment" selected>Beginner</option>
				<option value="Omon ">OMON</option>
				<option value="Lochment">Ment</option>
				<option value="prof child beater">prof</option>
			</select>
		</div>
		<div class="input-group">
			<label for="idiot"><input name="idiot" id="idiot" type="checkbox">Idiot?</label>
			<label for="gore"><input name="gore" id="gore" type="checkbox">Gore lover?</label>
			<label for="problems"><input name="problems" id="problems" type="checkbox">Psychological
				problems?</label>
		</div>
		<button type="submit" name="submit">Register Madafka Gopnik</button>
	</form>
<?php endif; ?>
<?php if (isset($sertificat)) : ?>
	<!--Ment sertificat -->
	<div class="sertificat-container">
		<div class="sertificat">
			<h1>
				Greeting <span><?= $sertificat['name'] . " " . $sertificat['surname'] ?></span> you are officialy
				<span><?= $sertificat['department'] ?></span>!!!
			</h1>
			<p><?= $sertificat['age'] ?></p>
		</div>
	</div>
<?php endif; ?>

<form action="" method="" target=""></form>
</body>
</html>