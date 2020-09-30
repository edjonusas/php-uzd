<?php

namespace App\Controllers\Guest;

use App\Abstracts\Controller;
use App\App;
use Core\Views\Content;

class pixelsController extends Controller
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
}