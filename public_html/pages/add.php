<?php
require '../../bootloader.php';

use App\App;
use App\Pixels\Pixel;
use App\Views\Forms\AddForm;
use App\Views\Pages\BasePage;

if (!App::$session->getUser()) {
    header('Location: login.php');
    exit();
}

$add_form = new AddForm();

if ($add_form->isSubmitted()) {
    if ($add_form->validate()) {
        $pixel = new Pixel($add_form->getSubmitData());
        $pixel->setUserName(App::$session->getUser()['user_name']);
        App::$db->insertRow('pixels', $pixel->_getData());
        header('Location: my.php');
    }
}

$addPage = new BasePage();
$addPage->setTitle('Add pixel');
$addPage->addCss('../css/style.css');
$addPage->setContent($add_form->render());
print $addPage->render();

?>
