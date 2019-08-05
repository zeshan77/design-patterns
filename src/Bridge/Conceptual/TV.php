<?php

namespace App\Bridge\Conceptual;

class TV implements DeviceInterface
{
    private $isEnabled = false;

    public function enable(): void
    {
        $this->isEnabled = true;
        var_dump(self::class . ' enabled');
    }

    public function disable(): void
    {
        $this->isEnabled = false;
    }

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function volumeUp(): void
    { }

    public function volumeDown(): void
    { }

    public function channelUp(): void
    { }

    public function channelDown(): void
    { }
}
