<?php

use App\Users\User;
use App\Views\Forms\RegisterForm;
use Core\Views\Navigation;

require '../../bootloader.php';

$navigation = new Navigation();
$register = new RegisterForm();

if ($register->isSubmitted()) {
    if ($register->validate()) {
        $user = new User($register->getSubmitData());
        App\App::$db->insertRow('users', $user->_getData());
        header('Location: login.php');
        exit();
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
<?php print $register->render(); ?>
</body>
</html>