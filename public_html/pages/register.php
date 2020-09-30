<?php


use App\Controllers\Guest\RegisterController;

require '../../bootloader.php';

$controller = new RegisterController();
print $controller->index();
