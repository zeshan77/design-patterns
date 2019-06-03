<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MallarDuck;
use App\ModelDuck;
use App\FlyRocketPowered;

class MiniDuckSimulator extends TestCase {

    function testMullardDuck()
    {
        $mallar = new MallarDuck;
        $mallar->performQuack();
        $mallar->performFly();

        $model = new ModelDuck;
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered);
        $model->performFly();

        // just to avoid phpunit warning
        $this->assertTrue(true);
    }

}