<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class ModalDark implements ModalInterface
{
    public function handle(): string
    {
        return 'dark modal';
    }
}