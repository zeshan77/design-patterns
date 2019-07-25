<?php
declare(strict_types = 1);

namespace App\FactoryMethod\RealWorldExample;

class FacebookPoster extends SocialNetworkPoster
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
        return new FacebookConnector($this->username, $this->password);
    }
}