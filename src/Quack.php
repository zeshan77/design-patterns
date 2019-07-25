<?php

namespace App;

use App\Contracts\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        print 'Quack';
        echo PHP_EOL;
    }
}