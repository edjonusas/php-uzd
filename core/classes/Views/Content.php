<?php

namespace Core;

class Content extends \Core\View
{
    public function render(string $template_path): string
    {
        $template_path = '/app/templates/content' . $template_path;
        return parent::render($template_path);
    }
}