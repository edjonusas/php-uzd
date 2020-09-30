<?php

use App\Controllers\pixelsController;

require '../bootloader.php';

$controller = new PixelsController();
print $controller->index();