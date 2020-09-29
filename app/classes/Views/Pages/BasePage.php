<?php

namespace App\Views\Pages;

use Core\Views\Navigation;

class BasePage extends \Core\Views\Page
{

    /**
     * Čia galėsime nustatyti
     * $data['title'], $data['css'], $data['content']...
     * extend'inę šią klasę pvz.: App\Views\Pages\BasePage.php
     *
     * BasePage bus atsakinga už pagrindinius dalykus, tai
     * css, js, header ir footer
     *
     * Po to galėsime extendinti BasePage su App\Views\Pages\LoginPage.php,
     * kur nustatysime title ir content.
     */
    public function __construct()
    {
        $nav = new Navigation();
        $this->setTitle('unkown page');
        $this->setHeader($nav->render());
        $this->setFooter('cia gal bus achujenas Footeris');
    }
}