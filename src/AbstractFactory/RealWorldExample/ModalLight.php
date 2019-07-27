<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ModalLight implements ModalInterface
{
    public function handle(): string
    {
        return 'light modal';
    }
}