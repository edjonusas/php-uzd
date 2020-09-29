<?php

use App\App;
use App\Views\Pages\BasePage;
use Core\Views\Content;

require '../../bootloader.php';

if (!App::$session->getUser()) {
    header('Location: login.php');
    exit();
}

$UserPixels = ['user_name' => $_SESSION['user_name']];

$pixels = App::$db->getRowsWhere('pixels', $UserPixels);
$content = new Content($pixels);
$myPage = new BasePage();
$myPage->setTitle('My pixel');
$myPage->addCss('../css/style.css');
$myPage->setContent($content->render('index.tpl.php'));
print $myPage->render();
