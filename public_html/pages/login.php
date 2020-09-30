<?php

use App\Controllers\Guest\LoginController;

require '../../bootloader.php';

$controller = new LoginController();
print $controller->index();

