<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteFactoryA implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB;
    }
}