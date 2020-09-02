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
        'email' => [
            'label' => 'E-mail',
            'filter' => FILTER_SANITIZE_EMAIL,
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'type' => 'email',
            'value' => 'test@mail',
            'extra' => [
                'attr' => [
                    'class' => 'email-field',
                    'placeholder' => 'jonas@balvonas.com',
                ],
            ],
        ],
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            'value' => 'Edd',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'name-field',
                    'placeholder' => 'Enter your name',
                ],
            ],
        ],
        'surname' => [
            'label' => 'Sur Name',
            'type' => 'text',
            'value' => 'Jon',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'name-field',
                    'placeholder' => 'Enter your name',
                ],
            ],
        ],
        'age' => [
            'label' => 'Age',
            'type' => 'text',
            'value' => '100',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                ],
            'extra' => [
                'attr' => [
                    'class' => 'age-field',
                    'placeholder' => 'Enter your age',
                ],
            ],
        ],
        'sex' => [
            'label' => 'Lytis',
            'type' => 'select',
            'value' => 'male',
            'option' => [
                'male' => 'Vyras',
                'female' => 'Moteris',
                'other' => 'Kitas'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'sex-selector'

                ]
            ]
        ],
    ],
    'buttons' => [
        'save' => [
            'title' => 'join',
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
    validate_form($form, $input);
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
<p><?php print $input['name'] ?? 'Neivesta' ?></p>
<p><?php print $input['surname'] ?? 'Neivesta' ?></p>
<p><?php print $input['email'] ?? 'Neivesta' ?></p>
<p><?php print $input['age'] ?? 'Neivesta' ?></p>
</body>
</html>
