<?php
require '../../bootloader.php';

use App\App;
use App\Pixels\Pixel;
use Core\Views\Form;
use Core\Views\Navigation;

if (!App::$session->getUser()) {
    header('Location: login.php');
    exit();
}


$form = [
    'attr' => [
        'method' => 'POST',
        'id' => 'add-pixel'
    ],
    'fields' => [
        'x' => [
            'type' => 'text',
            'value' => '',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_range' => [
                        'min' => 0,
                        'max' => 499,
                    ],
                ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter X coordinates'
                ]
            ]
        ],
        'y' => [
            'type' => 'text',
            'value' => '',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_range' => [
                        'min' => 0,
                        'max' => 499,
                    ],
                ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Y coordinates'
                ]
            ]
        ],

        'colour' => [
            'type' => 'select',
            'value' => 'red',
            'validators' => [
                'validate_selector_value',
            ],
            'option' => [
                'red' => 'Red',
                'blue' => 'Blue',
                'green' => 'Green',
                'black' => 'Black',
                'yellow' => 'Yellow',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'colour-selector'
                ]
            ]
        ],
        'pixel_size' => [
            'label' => 'Pixel size',
            'type' => 'range',
            'value' => '10',
            'min_value' => '1',
            'max_value' => '20',
            'validators' =>
                [
                    'validate_field_not_empty',
                    'validate_field_is_number',
                    'validate_field_range' => [
                        'min' => 1,
                        'max' => 20,
                    ],
                ],
        ],
    ],

    'buttons' => [
        'login' => [
            'title' => 'Add pixel',
        ],
    ],
    'validators' => [
        'validate_pixel_unique_position' => [
            'x',
            'y'
        ],
    ],
];

$navigation = new Navigation();
$add_form = new Form($form);

if ($add_form->isSubmitted()) {
    if ($add_form->validate()) {
        $pixel = new Pixel($add_form->getSubmitData());
        $pixel->setUserName(App::$session->getUser()['user_name']);
        App::$db->insertRow('pixels', $pixel->_getData());
        header('Location: my.php');
    }
}

//var_dump($form);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add pixels</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>
<?php print $add_form->render(); ?>
</body>
</html>
