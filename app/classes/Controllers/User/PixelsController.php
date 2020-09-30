<?php

namespace App\Controllers\User;

use App\Abstracts\Controller;
use App\Abstracts\UserController;
use App\App;
use App\Pixels\Pixel;
use App\Views\Forms\AddForm;
use Core\Views\Content;

class pixelsController extends UserController
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
    public function index(): ?string
    {
        $data['pixels'] = App::$db->getRowsWhere('pixels', []);
        $content = new Content($data);
        $this->page->setTitle('All Pixels');
        $this->page->addCss('/css/style.css');
        $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }

    public function my()
    {
        $UserPixels = ['user_name' => $_SESSION['user_name']];
        $data['pixels'] = App::$db->getRowsWhere('pixels', $UserPixels);
        $content = new Content($data);
        $this->page->setTitle('My pixel');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }

    public function add()
    {

        $add_form = new AddForm();

        if ($add_form->isSubmitted()) {
            if ($add_form->validate()) {
                $pixel = new Pixel($add_form->getSubmitData());
                $pixel->setUserName(App::$session->getUser()['user_name']);
                App::$db->insertRow('pixels', $pixel->_getData());
                header('Location: my.php');
            }
        }

        $this->page->setTitle('Add pixel');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($add_form->render());
        return $this->page->render();
    }
}