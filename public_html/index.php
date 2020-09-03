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
        'name' => [
            'label' => 'Vardas ir Pavarde',
            'type' => 'text',
            'value' => 'Jonas Smitas',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_string_gap',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'name-field',
                    'placeholder' => 'Enter your name',
                ],
            ],
        ],
        'age' => [
            'label' => 'Amzius',
            'type' => 'text',
            'value' => '100',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_number_interval',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'age-field',
                    'placeholder' => 'Enter your age',
                ],
            ],
        ],
    ],
    'buttons' => [
        'save' => [
            'title' => 'Ar as normalus?',
            'extra' => [
                'attr' => [
                    'class' => 'big-button',
                ]
            ]
        ]
    ]
];

$fields = ['email', 'name'];

if (!empty($_POST)) {
    $input = sanitize_form_input_values($form);
    $message = validate_form($form, $input) ? 'Gal ir normalus' : 'Neee nenormalus';
}
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
<p><?php print $message ?></p>

</body>
</html>
