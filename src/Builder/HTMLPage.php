<?php
declare(strict_types = 1);

namespace App\Builder;

class HTMLPage
{
    private $page;
    private $title;
    private $heading;
    private $text;


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setHeading(string $heading): void
    {
        $this->heading = $heading;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function formatPage()
    {
        $this->page = '<html>';
        $this->page .= '<head><title>' . $this->title . '</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>' . $this->heading . '</h1>';
        $this->page .= '<p>' . $this->text . '</p>';
        $this->page .= '</body>';
        $this->page .= '</html>';
    }

    public function showPage()
    {
        return $this->page;
    }
}