<?php
declare(strict_types = 1);

namespace App\Tests\Adapter;

use PHPUnit\Framework\TestCase;
use App\Adapter\Conceptual\Adaptee;
use App\Adapter\Conceptual\ConcreteAdapter;
use App\Adapter\Conceptual\TargetInterface;

class ConceptualAdapterTest extends TestCase
{
    function testAdapter()
    {
        $this->clientCode(new ConcreteAdapter(new Adaptee));
        $this->assertTrue(true);
    }

    private function clientCode(TargetInterface $targetInterface)
    {
        $targetInterface->request();
    }
}