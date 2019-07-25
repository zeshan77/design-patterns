<?php

namespace App;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        print 'silence...';
    }
}