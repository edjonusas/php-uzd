<?php

use App\Users\User;
use App\Views\Forms\RegisterForm;
use App\Views\Pages\BasePage;

require '../../bootloader.php';

$register = new RegisterForm();

if ($register->isSubmitted()) {
    if ($register->validate()) {
        $user = new User($register->getSubmitData());
        App\App::$db->insertRow('users', $user->_getData());
        header('Location: login.php');
        exit();
    }
}

$registerPage = new BasePage();
$registerPage->setTitle('Registration');
$registerPage->addCss('../css/style.css');
$registerPage->setContent($register->render());
print $registerPage->render();
