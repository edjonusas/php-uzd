<?php
/**
 * Sanitize post inputs
 *
 * @param array $fields
 * @return array
 */
function sanitize_post(array $fields): array
{
    $filter = [];
    foreach ($fields as $key => $value) {
        $filter[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter);
}

if (!empty($_POST)) {
    $input = sanitize_post($_POST);
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
</head>
<body>
<form method="post">
	<input type="text" name="vardas" placeholder="name">
	<input type="text" name="pavarde" placeholder="surname">
	<button>Submit</button>
</form>
<p><?php print $input['vardas'] ?? 'Neivesta' ?></p>
<p><?php print $input['pavarde'] ?? 'Neivesta' ?></p>
</body>
</html>
