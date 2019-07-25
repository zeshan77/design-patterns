<?php
declare(strict_types = 1);

namespace App\FactoryMethod;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return 'ConcreteProduct2::operation() called...';
    }
}