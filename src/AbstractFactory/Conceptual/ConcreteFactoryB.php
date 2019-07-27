<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteFactoryB implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}