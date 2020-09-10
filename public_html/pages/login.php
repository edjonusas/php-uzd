<?php

require '../../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST',
        'id' => 'login'
    ],
    'fields' => [
        'user_name' => [
            'label' => 'User Name',
            'type' => 'user_name',
            'value' => '',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Your User Name'
                ]
            ]
        ],
        'password' => [
            'label' => 'Password',
            'type' => 'password',
            'value' => '',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
        ],
    ],
    'buttons' => [
        'login' => [
            'title' => 'Login',
        ],
    ],
    'validators' => [
        'validate_login' => [
            'user_name',
            'password'
        ]
    ],
];

if (!empty($_POST)) {
    $input = sanitize_form_input_values($form);
    if (validate_form($form, $input)) {

        $_SESSION = [
            'user_name' => $input['user_name'],
            'password' => $input['password']
        ];
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
<?php include '../../core/templates/form.tpl.php'; ?>
</body>
</html>