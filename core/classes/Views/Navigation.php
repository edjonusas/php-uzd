<?php

namespace Core\Views;

use Core\View;

class Navigation extends View
{

    public function __construct()
    {
        parent::__construct(generate_nav());
    }

    public function render(string $template_path = ROOT . '/core/templates/nav.tpl.php')
    {
        return parent::render($template_path);
    }
}