<?php

namespace Core;

use Exception;

class View
{
    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Renders array of $this->data into template file
     *
     * @param string $template_path
     * @return string Rendered HTML
     * @throws Exception
     */
    public function render(string $template_path)
    {
        if (!file_exists($template_path)) {
            throw (new Exception("Template with file name: " . "$template_path does not exist"));
        }
        $data = $this->data;

        ob_start();

        require $template_path;

        return ob_get_clean();

    }

}