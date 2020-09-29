<?php

use App\App;
use App\Views\Pages\BasePage;
use Core\Views\Content;

require '../bootloader.php';

$pixels = App::$db->getRowsWhere('pixels', []);
$content = new Content($pixels);
$indexPage = new BasePage();
$indexPage->setTitle('Pixels');
$indexPage->addCss('/css/style.css');
$indexPage->setContent($content->render('index.tpl.php'));
print $indexPage->render();



