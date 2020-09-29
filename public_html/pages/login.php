<?php

use App\Views\Forms\LoginForm;
use App\Views\Pages\BasePage;

require '../../bootloader.php';

$login = new LoginForm();

if ($login->isSubmitted()) {
    if ($login->validate()) {
        App\App::$session->login($login->getSubmitData()['user_name'], $login->getSubmitData()['password']);
        header('Location: my.php');
    }
}

$loginPage = new BasePage();
$loginPage->setTitle('Login');
$loginPage->addCss('../css/style.css');
$loginPage->setContent($login->render());
print $loginPage->render();

