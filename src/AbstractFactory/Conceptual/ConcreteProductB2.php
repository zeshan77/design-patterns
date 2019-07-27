<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteProductB2 implements AbstractProductB
{
    public function handle(): string
    {
        return 'ConcreteProductB2::handle called';
    }
}