<?php

use App\Controllers\pixelsController;

require '../../bootloader.php';

$controller = new pixelsController();
print $controller->add();