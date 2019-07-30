<?php
declare(strict_types = 1);

namespace App\Builder;

use App\Builder\AbstractPageDirector;

class HTMLPageDirector extends AbstractPageDirector
{
    private $builder;

    public function __construct(AbstractPageBuilder $builder)
    {
        $this->builder = $builder;    
    }

    public function buildPage()
    {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('testin testing testing');
        $this->builder->setText('testin testing testing or');
        $this->builder->setText('testin testing testing more');
        $this->builder->formatPage();
    }

    public function getPage()
    {
        return $this->builder->getPage();
    }
}