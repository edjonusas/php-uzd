<?php
require 'core/functions/html.php';
require 'core/functions/validators.php';
//require 'core/functions/file.php';
require 'app/functions/form/validators.php';
require 'core/classes/FileDB.php';

define('ROOT', __DIR__);
define('DB_FILE', ROOT . '\app\data\db.json');
//define('DB_RADIO', ROOT . '\app\data\radio.json');
//ini_set('error_reporting', E_ALL);
session_start();

