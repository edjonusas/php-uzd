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
            'extra' => [
                'attr' => [
                    'class' => 'name-field',
                    'placeholder' => 'Enter your name',
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
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>formatron3000</title>
</head>
<body>
<?php include '../core/templates/form.tp1.php'; ?>
<p><?php print $input['name'] ?? 'Neivesta' ?></p>
<p><?php print $input['surname'] ?? 'Neivesta' ?></p>
</body>
</html>
