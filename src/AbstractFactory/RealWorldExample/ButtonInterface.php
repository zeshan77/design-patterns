<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

interface ButtonInterface
{
    public function handle(): string;
}