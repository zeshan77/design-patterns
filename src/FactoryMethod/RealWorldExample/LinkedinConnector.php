<?php
declare(strict_types = 1);

namespace App\FactoryMethod\RealWorldExample;

class LinkedinConnector implements SocialNetworkConnector
{
    protected $username;
    protected $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login(): void
    {
        var_dump('log in to Linkedin using username = ' . $this->username . ' and password = '. $this->password);
    }

    public function post(string $content): void
    {
        var_dump('Posting on to Linkedin...: ' . $content);
    }

    public function logout(): void
    {
        var_dump('Logout of Linkedin');
    }
}