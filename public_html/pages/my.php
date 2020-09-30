<?php

use App\Controllers\User\pixelsController;

require '../../bootloader.php';

$controller = new pixelsController();

print $controller->my();
