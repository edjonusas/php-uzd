<?php
require '../bootloader.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'password' => [
            'label' => 'password',
            'type' => 'password',
            'value' => 'super-kurtas-pass',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'age-field',
                    'placeholder' => 'Enter number',
                ],
            ],
        ],
        'password_repeat' => [
            'label' => 'password-repeat',
            'type' => 'password',
            'value' => 'super-kurtas-pass',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'age-field',
                    'placeholder' => 'Enter number',
                ],
            ],
        ],
    ],
    'buttons' => [
        'save' => [
            'title' => 'Ar pazysti skaicius?',
            'extra' => [
                'attr' => [
                    'class' => 'big-button',
                ],
            ],
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'password_repeat'
        ]
    ],
];

if (!empty($_POST)) {
    $input = sanitize_form_input_values($form);
    $message = validate_form($form, $input) ? 'Gal ir normalus' : 'Neee nenormalus';
}
$write = array_to_file($form, DB_FILE) ? 'irase' : 'nea';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>formatron3000</title>
</head>
<body>
<?php include '../core/templates/form.tp1.php'; ?>
</body>
</html>
