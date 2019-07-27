<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ColorDark implements ColorInterface
{
    public function handle(): string
    {
        return 'dark color';
    }
}