<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ColorLight implements ColorInterface
{
    public function handle(): string
    {
        return 'light color';
    }
}