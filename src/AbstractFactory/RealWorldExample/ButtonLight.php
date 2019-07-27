<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ButtonLight implements ButtonInterface
{
    public function handle(): string
    {
        return 'light button';
    }
}