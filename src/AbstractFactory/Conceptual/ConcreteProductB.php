<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteProductB implements AbstractProductB
{
    public function handle(): string
    {
        return 'ConcreteProductB::handle() called';
    }
}