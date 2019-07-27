<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteProductA implements AbstractProductA
{
    public function handle(): string
    {
        return 'ConcreteProductA::handle() called';
    }
}