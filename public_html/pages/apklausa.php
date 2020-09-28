<?php

require '../../bootloader.php';

$data = [
    'attr' => [
        'method' => 'POST',
    ],
    'fields' => [
        'laikai_kardana' => [
            'label' => 'Ar laikai kardana',
            'type' => 'radio',
            'options' =>
                [
                    'taip' => 'Taip',
                    'ne' => 'Ne',
                ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Submit',
        ],
    ],
];

if (!empty($_POST)) {
    $input = sanitize_form_input_values($data);
    if (validate_form($data, $input)) {
        // if file not empty use file and add input data
        if (!empty(file_to_array(DB_RADIO))) {
            $input_data = file_to_array(DB_RADIO);
            $input_data[] = $input;
        } else {
            $input_data[] = $input;
        }
        $message = array_to_file($input_data, DB_RADIO) ? 'Išsaugota' : 'Neišsaugota';
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
	<title>Apklausa</title>
</head>
<body>
<nav>
	<a href="../index.php">Home</a>
</nav>
<h2>Apklausa</h2>
<?php include '../../core/templates/form.tpl.php'; ?>
</body>
</html>
