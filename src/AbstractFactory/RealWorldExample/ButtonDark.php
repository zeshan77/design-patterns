<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ButtonDark implements ButtonInterface
{
    public function handle(): string
    {
        return 'dark button';
    }
}