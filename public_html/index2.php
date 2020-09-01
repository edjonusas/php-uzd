<?php
if (!empty($_POST)) {
    $email_validated = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age_validated = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, [
        'options' => [
            'min_range' => 18,
            'max_range' => 150
        ]
    ]);
    $height_validated = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT, [
        'options' => [
           // 'decimal' => 0.1,
            'min_range' => 0.3,
            'max_range' => 3
        ]
    ]);
    var_dump($height_validated);
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
</head>
<body>
<form method="POST">
	<input type="email" placeholder="email" name="email" value="email@mail.com">
	<input type="password" placeholder="enter password" name="password">
	<input type="password" placeholder="repeat password" name="pasword-repeat">
	<input type="text" placeholder="age" name="age">
	<input type="text" placeholder="height" name="height">
	<input type="text" placeholder="facebook url" name="fb-url">
	<button>Subimt</button>
</form>
</body>
</html>

<!--if (isset($_POST['register'])) {-->
<!--$email_validated = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);-->
<!--var_dump($email_validated);-->
<!--// var_dump(filter_input(INPUT_POST, 'password'));-->
<!--// var_dump(filter_input(INPUT_POST, 'repeat-password'));-->
<!--1;-->
<!--// Amžiui patikrinti kad būtų nuo 18 iki 150 metų, ir kad būtų sveikasis skaičius-->
<!--2;-->
<!--// Aukščiui nustatyti kad reikšmė būtų float tipo, ir būtų rėžiuose 0,3 iki 3-->
<!--// var_dump(filter_input(INPUT_POST, 'height'));-->
<!--$height_validated = filter_input(INPUT_POST, 'height', --------, [-->
<!--'options' => [-->
<!--'min_range' => ------,-->
<!--'max_range' => ------->
<!--]-->
<!--]);-->
<!--3;-->
<!--// Patikrinti kad būtų domenas-->
<!--// var_dump(filter_input(INPUT_POST, 'fb-address'));-->
<!--}-->