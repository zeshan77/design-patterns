<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class CheckboxLight implements CheckboxInterface
{
    public function handle(): string
    {
        return 'light checkbox';
    }
}