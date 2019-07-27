<?php
declare(strict_types = 1);

namespace App\AbstractFactory\Conceptual;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}