<?php

require '../bootloader.php';

App\App::$db->createTable('users');
App\App::$db->createTable('pixels');

print "instalet user and pixel tables";
