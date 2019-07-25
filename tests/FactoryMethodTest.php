<?php
declare(strict_types = 1);

namespace Tests;

use App\FactoryMethod\Creator;
use PHPUnit\Framework\TestCase;
use App\FactoryMethod\ConcreteCreator1;
use App\FactoryMethod\ConcreteCreator2;
use App\FactoryMethod\RealWorldExample\LinkedinPoster;
use App\FactoryMethod\RealWorldExample\FacebookPoster;
use App\FactoryMethod\RealWorldExample\SocialNetworkPoster;

class FactoryMethodTest extends TestCase
{
    function testProduct1()
    {
        $response = $this->clientCode(new ConcreteCreator1);
        $this->assertEquals('ConcreteProduct1::operation() called...', $response);
    }

    function testProduct2()
    {
        $response = $this->clientCode(new ConcreteCreator2);
        $this->assertEquals('ConcreteProduct2::operation() called...', $response);
    }

    function testFacebookRealWorld()
    {
        $facebookPoster = new FacebookPoster('zeshan@email.com', 'Qwerty');
        $response = $this->clientCodeForRealWorldExamples($facebookPoster, 'post this content');
        $this->assertTrue(true);
    }
    
    function testLinkedinRealWorld()
    {
        $linkedinPoster = new LinkedinPoster('zeshan@email.com', 'Qwerty');
        $response = $this->clientCodeForRealWorldExamples($linkedinPoster, 'post this content');
        $this->assertTrue(true);
    }

    private function clientCode(Creator $creator)
    {
        return $creator->someOperation();
    }

    private function clientCodeForRealWorldExamples(SocialNetworkPoster $socialNetworkPoster, string $content)
    {
        $socialNetworkPoster->post($content);
    }

}