<?php
declare(strict_types = 1);

namespace Tests;

use App\FactoryMethod\Creator;
use PHPUnit\Framework\TestCase;
use App\FactoryMethod\ConcreteCreator1;
use App\FactoryMethod\ConcreteCreator2;

class FactoryMethodTest extends TestCase
{
    function testProduct1()
    {
        $response = $this->clientCode(new ConcreteCreator1);
        $this->assertEquals('ConcreteProduct1::operation() called...', $response);
    }

    function testProduct2()
    {
        $response = $this->clientCode(new ConcreteCreator2);
        $this->assertEquals('ConcreteProduct2::operation() called...', $response);
    }

    private function clientCode(Creator $creator)
    {
        return $creator->someOperation();
    }

}