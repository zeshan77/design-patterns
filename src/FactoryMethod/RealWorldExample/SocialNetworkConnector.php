<?php
declare(strict_types = 1);

namespace App\FactoryMethod\RealWorldExample;

interface SocialNetworkConnector
{
    public function login(): void;
    public function post(string $content): void;
    public function logout(): void;
}
