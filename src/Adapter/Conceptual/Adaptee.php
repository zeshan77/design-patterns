<?php
declare(strict_types = 1);

namespace App\Adapter\Conceptual;

class Adaptee
{
    public function specificRequest(): void
    {
        var_dump('some business logic');
    }
}