<?php

require '../../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST',
        'id' => 'login'
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
        $message = array_to_file($input_data, DB_FILE) ? $form['error'] = 'Registracija sėkminga' : $form['error'] = 'Kalida, bandykite dar kartą';
    } else {
        $form['error'] = 'Registracija mepavyko, bandykite dar kartą';
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