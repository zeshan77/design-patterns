<?php

namespace App;

use App\Contracts\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        print 'I am flying with wings...';
        echo PHP_EOL;
    }
}