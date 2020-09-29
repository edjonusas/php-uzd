<?php

namespace App\Views\Pages;

use Core\View;

class IndexPage extends BasePage
{
    public function __construct()
    {
        $content = new View();

        parent::__construct();
        $this->setTitle('');
        $this->setContent($content->render(ROOT.'/app/templates/content/index.tpl.php'));
    }
}