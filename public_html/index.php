<?php

use App\Controllers\Guest\pixelsController;

require '../bootloader.php';

$controller = new PixelsController();
print $controller->index();