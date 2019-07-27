<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

class ConcreteProductA2 implements AbstractProductA
{
    public function handle(): string
    {
        return 'ConcreteProductA2::handle() called';
    }
}