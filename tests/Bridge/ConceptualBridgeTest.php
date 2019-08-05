<?php
declare(strict_types = 1);

namespace Tests\Bridge;

use App\Bridge\Conceptual\TV;
use PHPUnit\Framework\TestCase;
use App\Bridge\Conceptual\RemoteControl;
use App\Bridge\Conceptual\DeviceInterface;
use App\Bridge\Conceptual\Radio;

class ConceptualBridgeTest extends TestCase
{
    function testBridgeConceptual()
    {
        $this->clientCode(new Radio);
        $this->assertTrue(true);
    }

    private function clientCode(DeviceInterface $device)
    {
        $remote = new RemoteControl($device);
        $remote->toggle();
    }
}