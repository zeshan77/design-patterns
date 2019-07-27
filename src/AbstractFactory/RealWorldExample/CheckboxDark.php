<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class CheckboxDark implements CheckboxInterface
{
    public function handle(): string
    {
        return 'dark checkbox';
    }
}