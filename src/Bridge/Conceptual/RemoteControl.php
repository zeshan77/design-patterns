<?php

namespace App\Bridge\Conceptual;

class RemoteControl
{
    private $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function toggle()
    {
        if ($this->device->isEnabled())
            $this->device->disable();
        else
            $this->device->enable();
    }

    public function volumeUp()
    {
        $this->device->volumeUp();
    }

    public function volumeDown()
    {
        $this->device->volumeDown();
    }

    public function channelUp()
    {
        $this->device->channelDown();
    }

    public function channelDown()
    {
        $this->device->channelUp();
    }
}
