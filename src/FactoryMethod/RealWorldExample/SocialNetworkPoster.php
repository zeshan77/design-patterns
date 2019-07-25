<?php
declare(strict_types = 1);

namespace App\FactoryMethod\RealWorldExample;

abstract class SocialNetworkPoster
{
    abstract function getSocialNetworkConnector(): SocialNetworkConnector;

    public function post(string $content): void
    {
        $connector = $this->getSocialNetworkConnector();
        $connector->login();
        $connector->post($content);
        $connector->logout();
    }
}
