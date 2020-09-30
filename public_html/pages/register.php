<?php


use App\Controllers\Auth\RegisterController;

require '../../bootloader.php';

$controller = new RegisterController();
print $controller->index();
