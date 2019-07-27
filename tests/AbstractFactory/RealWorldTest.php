<?php
declare(strict_types = 1);

namespace Tests\AbstractFactory;

use PHPUnit\Framework\TestCase;
use App\AbstractFactory\RealWorldExample\ThemeAbstractFactory;
use App\AbstractFactory\RealWorldExample\LightThemeFactory;
use App\AbstractFactory\RealWorldExample\DarkThemeFactory;

class RealWorldTest extends TestCase
{
    function testLightTheme()
    {
        $response = $this->clientCode(new LightThemeFactory);

        $this->assertEquals('light color', $response['color']);
        $this->assertEquals('light button', $response['button']);
        $this->assertEquals('light checkbox', $response['checkbox']);
        $this->assertEquals('light modal', $response['modal']);
    }

    function testDarkTheme()
    {
        $response = $this->clientCode(new DarkThemeFactory);

        $this->assertEquals('dark color', $response['color']);
        $this->assertEquals('dark button', $response['button']);
        $this->assertEquals('dark checkbox', $response['checkbox']);
        $this->assertEquals('dark modal', $response['modal']);
    }

    private function clientCode(ThemeAbstractFactory $themeAbstractFactory)
    {
        $color = $themeAbstractFactory->createColor();
        $button = $themeAbstractFactory->createButton();
        $checkbox = $themeAbstractFactory->createCheckbox();
        $modal = $themeAbstractFactory->createModal();

        return [
            'color' => $color->handle(),
            'button' => $button->handle(),
            'checkbox' => $checkbox->handle(),
            'modal' => $modal->handle(),
        ];
    }
}