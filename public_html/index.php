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
        'number1' => [
            'label' => 'skaicius (100-200)',
            'type' => 'text',
            'value' => '150',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_range' => [
                        'min' => 100,
                        'max' => 200
                    ],
                ],
            'extra' => [
                'attr' => [
                    'class' => 'age-field',
                    'placeholder' => 'Enter number',
                ],
            ],
        ],
        'number2' => [
            'label' => 'skaicius (50-100)',
            'type' => 'text',
            'value' => '70',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_range' => [
                        'min' => 50,
                        'max' => 100
                    ],
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
                ]
            ]
        ]
    ]
];

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
<p><?php print $message ?? '' ?></p>

</body>
</html>
