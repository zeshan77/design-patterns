<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

interface ModalInterface
{
    public function handle(): string;
}