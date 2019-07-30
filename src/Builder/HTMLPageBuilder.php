<?php
declare(strict_types = 1);

namespace App\Builder;

use App\Builder\HTMLPage;

class HTMLPageBuilder extends AbstractPageBuilder
{
    private $page;
    public function __construct()
    {
        $this->page = new HTMLPage;
    }

    public function setTitle(string $title): void
    {
        $this->page->setTitle($title);
    }

    public function setHeading(string $heading): void
    {
        $this->page->setHeading($heading);
    }

    public function setText(string $text): void
    {
        $this->page->setText($text);
    }

    public function formatPage()
    {
        $this->page->formatPage();
    }

    public function getPage(): HTMLPage
    {
        return $this->page;
    }
}