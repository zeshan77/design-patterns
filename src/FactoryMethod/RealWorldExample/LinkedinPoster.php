<?php
declare(strict_types = 1);

namespace App\FactoryMethod\RealWorldExample;

class LinkedinPoster extends SocialNetworkPoster
{
    protected $username;
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getSocialNetworkConnector(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->username, $this->password);
    }
}