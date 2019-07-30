<?php
declare(strict_types = 1);

namespace App\Builder;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $abstractPageBuilder);
    abstract function buildPage();
    abstract function getPage();
}