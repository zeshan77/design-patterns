<?php
declare(strict_types = 1);

namespace App\FactoryMethod;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return 'ConcreteProduct1::operation() called...';
    }
}