<?php
declare(strict_types = 1);

namespace App\Adapter\Conceptual;

interface TargetInterface
{
    public function request(): void;
}