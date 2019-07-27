<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

class DarkThemeFactory implements ThemeAbstractFactory
{
    public function createColor(): ColorInterface
    {
        return new ColorDark;
    }

    public function createButton(): ButtonInterface
    {
        return new ButtonDark;
    }

    public function createModal(): ModalInterface
    {
        return new ModalDark;
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new CheckboxDark;
    }
}