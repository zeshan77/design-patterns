<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class LightThemeFactory implements ThemeAbstractFactory
{
    public function createColor(): ColorInterface
    {
        return new ColorLight;
    }

    public function createButton(): ButtonInterface
    {
        return new ButtonLight;
    }

    public function createModal(): ModalInterface
    {
        return new ModalLight;
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new CheckboxLight;
    }
}