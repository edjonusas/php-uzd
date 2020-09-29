<?php

namespace Core\Views;

class Page extends \Core\Abstracts\Views\Page
{

    /**
     * Čia galėsime nustatyti $data['title'] jau sukūrus Page objektą
     *
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->data['title'] = $title;
    }

    /**
     * Čia galėsime įtraukti CSS'o path'ą į $data['css'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    public function addCSS(string $url): void
    {
        $this->data['css'][] = $url;
    }

    /**
     * Čia galėsime įtraukti JS'o path'ą į $data['js'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    public function addJS(string $url): void
    {
        $this->data['js'][] = $url;
    }

    /**
     * Čia galėsime nustatyti $data['header']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $header_html
     */
    public function setHeader(string $header_html): void
    {
        $this->data['header'] = $header_html;
    }

    /**
     * Čia galėsime nustatyti $data['content']`o html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $content_html
     */
    public function setContent(string $content_html): void
    {
        $this->data['content'] = $content_html;
    }

    /**
     * Čia galėsime nustatyti $data['footer']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $footer_html
     */
    public function setFooter(string $footer_html): void
    {
        $this->data['footer'] = $footer_html;
    }
}