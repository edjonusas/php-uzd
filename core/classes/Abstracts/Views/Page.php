<?php

namespace Core\Abstracts\Views;

use Core\View;

/**
 * Class Page
 *
 * Ši klasė atsakinga už viso page'o atspausdinimą,
 * įskaitant <html> tagą, head'ą ir tt...
 *
 * @package App\Abstracts\Views
 * @author  Dainius Vaičiulis   <denncath@gmail.com>
 */
abstract class Page extends View
{
    protected array $data = [
        'title' => 'Default Page',
        'css' => [],
        'js' => [],
        'header' => null,
        'content' => null,
        'footer' => null,
    ];

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

    }

    /**
     * Čia galėsime nustatyti $data['title'] jau sukūrus Page objektą
     *
     * @param string $title
     */
    abstract public function setTitle(string $title): void;

    /**
     * Čia galėsime įtraukti CSS'o path'ą į $data['css'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    abstract public function addCSS(string $url): void;

    /**
     * Čia galėsime įtraukti JS'o path'ą į $data['js'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    abstract public function addJS(string $url): void;

    /**
     * Čia galėsime nustatyti $data['header']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $header_html
     */
    abstract public function setHeader(string $header_html): void;

    /**
     * Čia galėsime nustatyti $data['content']`o html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $content_html
     */
    abstract public function setContent(string $content_html): void;

    /**
     * Čia galėsime nustatyti $data['footer']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $footer_html
     */
    abstract public function setFooter(string $footer_html): void;

    /**
     * Page template'as bus saugomas app/templates/page-default.tpl.php
     * Į jį standartiškai ateis visas $data masyvas, iš kurio
     * bus galima sugeneruoti pagrindines page dalis
     *
     * @param string $template_path
     * @return mixed
     */
    public function render(string $template_path = ROOT . '/app/templates/page-default.tpl.php')
    {
        return parent::render($template_path);
    }
}