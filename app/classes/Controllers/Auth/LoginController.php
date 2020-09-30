<?php

namespace App\Controllers\Auth;

use App\Abstracts\Controller;
use App\Views\Forms\LoginForm;
use App\App;

class LoginController extends Controller
{

    /**
     * This method builds or sets
     * current $page content
     * renders it and returns HTML
     *
     * So if we have ex.: ProductsController,
     * it can have methods responsible for
     * index() (main page, usualy a list),
     * view() (preview single),
     * create() (form for creating),
     * edit() (form for editing)
     * delete()
     *
     * These methods can then be called on each page accordingly, ex.:
     * add.php:
     * $controller = new PixelsController();
     * print $controller->add();
     *
     *
     * my.php:
     * $controller = new ProductsController();
     * print $controller->my();
     *
     * @return string|null
     */
    function index(): ?string
    {
        $login = new LoginForm();

        if ($login->isSubmitted()) {
            if ($login->validate()) {
                if (App::$session->login($login->getSubmitData()['user_name'], $login->getSubmitData()['password'])) {
                    header('Location: my.php');
                } else {
                    $login->addError('Wrong user name or password');
                }
            } else {
                $login->addError('Fill the login form');
            }
        }

        $this->page->setTitle('Login');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($login->render());
        return $this->page->render();
    }
}