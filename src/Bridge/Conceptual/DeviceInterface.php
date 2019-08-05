<?php

namespace App\Bridge\Conceptual;

interface DeviceInterface
{
    public function enable(): void;
    public function isEnabled(): bool;
    public function disable(): void;
    public function volumeUp(): void;
    public function volumeDown(): void;
    public function channelUp(): void;
    public function channelDown(): void;

}