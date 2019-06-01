<?php

namespace App;

use App\Contracts\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        print 'I am flying with a rocket...';
        echo PHP_EOL;
    }
}
