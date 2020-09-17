<?php
require 'core/functions/html.php';
require 'core/functions/validators.php';
require 'app/functions/form/validators.php';
require 'app/functions/html/html.php';
require 'app/functions/form/auth.php';
require 'core/classes/FileDB.php';

define('ROOT', __DIR__);
define('DB_FILE', ROOT . '\app\data\db.json');
//ini_set('error_reporting', E_ALL);
session_start();

