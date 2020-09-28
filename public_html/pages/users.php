<?php
require '../../bootloader.php';

$table_headers = ['Users emails', 'Users Passwords'];


    $users = file_to_array(DB_FILE)?? [];
    $data = create_table_array($users, $table_headers);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Users page</title>
</head>
<body>
<nav>
	<a href="../index.php">Home</a>
</nav>
<h2>Users</h2>
<?php include '../../core/templates/table.tpl.php'; ?>
</body>
</html>
