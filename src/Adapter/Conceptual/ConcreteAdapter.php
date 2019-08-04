<?php
declare(strict_types = 1);

namespace App\Adapter\Conceptual;

use App\Adapter\Conceptual\Adaptee;
use App\Adapter\Conceptual\TargetInterface;

class ConcreteAdapter implements TargetInterface
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }
    
    public function request(): void
    {
        $this->adaptee->specificRequest();
    }

}