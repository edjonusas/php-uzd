<?php
require '../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST',
    ],
    'fields' => [
        'email' => [
            'label' => 'Email',
            'type' => 'email',
            'value' => 'email@email.com',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_user_unique' => [
                        'data' => DB_FILE,
                    ]
                ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Your Email'
                ]
            ]
        ],
        'password' => [
            'label' => 'Password',
            'type' => 'password',
            'value' => 'superkrutaspass',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],

        ],
        'password_repeat' => [
            'label' => 'Password repeat',
            'type' => 'Password',
            'value' => 'super-kurtas-pass',
            'validators' =>
                [
                    'validate_field_not_empty',
                ],
        ],
    ],
    'buttons' => [
        'save' => [
            'title' => 'register',
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
    if (validate_form($form, $input)) {
        unset($input['password_repeat']);
        // if file not empty use file and add input data
        if (!empty(file_to_array(DB_FILE))) {
            $input_data = file_to_array(DB_FILE);
            $input_data[] = $input;
        } else {
            $input_data[] = $input;
        }
        $message = array_to_file($input_data, DB_FILE) ? 'Išsaugota' : 'Neišsaugota';
    }
}

//$arr = file_to_array(DB_FILE);
//var_dump($arr);
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
<?php include '../core/templates/form.tpl.php'; ?>
<?php if (isset($message)) : ?>
	<span><?php print $message; ?></span>
<?php endif; ?>
</body>
</html>
