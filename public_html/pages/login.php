<?php

use App\Controllers\Auth\LoginController;

require '../../bootloader.php';

$controller = new LoginController();
print $controller->index();

