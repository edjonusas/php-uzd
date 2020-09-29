<?php

use App\Views\Forms\LoginForm;
use Core\Views\Form;
use Core\Views\Navigation;

require '../../bootloader.php';

$navigation = new Navigation();
$login = new LoginForm();

if ($login->isSubmitted()) {
    if ($login->validate()) {
        App\App::$session->login($login->getSubmitData()['user_name'], $login->getSubmitData()['password']);
        header('Location: my.php');
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
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>
<?php print $login->render(); ?>
</body>
</html>