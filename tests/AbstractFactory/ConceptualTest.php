<?php
declare(strict_types = 1);

namespace Tests\AbstractFactory;

use PHPUnit\Framework\TestCase;
use App\AbstractFactory\Conceptual\AbstractFactory;
use App\AbstractFactory\Conceptual\ConcreteFactoryA;
use App\AbstractFactory\Conceptual\ConcreteFactoryB;

class ConceptualTest extends TestCase
{
    function testCreateProductAFamily()
    {
        $response = $this->clientCode(new ConcreteFactoryA);
        $this->assertEquals('ConcreteProductA::handle() called', $response['productA']);
        $this->assertEquals('ConcreteProductB::handle() called', $response['productB']);
    }

    function testCreateProductBFamily()
    {
        $response = $this->clientCode(new ConcreteFactoryB);
        $this->assertEquals('ConcreteProductA2::handle() called', $response['productA']);
        $this->assertEquals('ConcreteProductB2::handle called', $response['productB']);
    }

    private function clientCode(AbstractFactory $abstractFactory)
    {
        $productA = $abstractFactory->createProductA();
        $productB = $abstractFactory->createProductB();

        return [
            'productA' => $productA->handle(),
            'productB' => $productB->handle(),
        ];
    }
}