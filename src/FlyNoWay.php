<?php

namespace App;

use App\Contracts\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        print "I can't fly.";
        echo PHP_EOL;
    }
}
