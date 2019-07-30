<?php
declare(strict_types = 1);

namespace Tests\Builder;

use PHPUnit\Framework\TestCase;
use App\Builder\HTMLPageDirector;
use App\Builder\HTMLPageBuilder;
use App\Builder\AbstractPageBuilder;

class HTMLPageBuilderTest extends TestCase
{
    function testBuildHtmlPage()
    {
        $response = $this->clientCode(new HTMLPageBuilder);
        var_dump($response);
        $this->assertTrue(true);
    }

    private function clientCode(AbstractPageBuilder $builder)
    {
        $director = new HTMLPageDirector($builder);
        $director->buildPage();
        $page = $director->getPage();
        var_dump($page->showPage());
    }
}