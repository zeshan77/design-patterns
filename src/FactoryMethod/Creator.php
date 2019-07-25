<?php
declare(strict_types = 1);

namespace App\FactoryMethod;

abstract class Creator
{
    abstract function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();
        return $product->operation();
    }
}