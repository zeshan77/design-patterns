<?php
declare(strict_types = 1);

namespace App\AbstractFactory\RealWorldExample;

interface ThemeAbstractFactory
{
    public function createColor(): ColorInterface;
    public function createButton(): ButtonInterface;
    public function createModal(): ModalInterface;
    public function createCheckbox(): CheckboxInterface;
}