<?php

namespace App;

class ModelDuck extends Duck {

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay;
        $this->quackBehavior = new Quack;
    }

    public function display()
    {
        print "I'm a model duck";
        echo PHP_EOL;
    }

}