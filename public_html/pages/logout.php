<?php

use App\Controllers\User\LogoutController;

require('../../bootloader.php');

$controller = new LogoutController();
$controller->index();

