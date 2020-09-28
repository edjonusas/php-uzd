<?php

use App\Users\User;
use Core\View;
use Core\Views\Form;
use Core\Views\Navigation;

require '../../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST',
        'id' => 'register'
    ],
    'fields' => [
        'user_name' => [
            'label' => 'User name',
            'type' => 'text',
            'value' => '',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_user_unique',
                ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Your User name'
                ]
            ]
        ],
        'password' => [
            'label' => 'Password',
            'type' => 'password',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
        ],
        'password_repeat' => [
            'label' => 'Repeat Password',
            'type' => 'password',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
        ],
    ],
    'buttons' => [
        'register' => [
            'title' => 'Register',
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'password_repeat'
        ],
    ],
];



//if (!empty($_POST)) {
//    $input = sanitize_form_input_values($form);
//    if (validate_form($form, $input)) {
//        $user = new User($input);
//        App\App::$db->insertRow('users', $user->_getData());
//        header('Location: login.php');
//        exit();
//    } else {
//        $form['error'] = 'Registracija nepavyko, bandykite dar kartą';
//    }
//}

$navigation = new Navigation();
$register = new Form($form);

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
    <?php print $navigation->render();?>
</header>
<?php print $register->render();?>
</body>
</html>