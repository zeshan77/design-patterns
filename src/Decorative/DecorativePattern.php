<?php

namespace App\Decorative;

interface Restaurant
{
    public function cost();
    public function description();
}

class Table implements Restaurant
{
    public function cost()
    {
        return 10;
    }

    public function description()
    {
        return 'Table reservation';
    }
}

abstract class KitchenDecorator implements Restaurant
{
    protected $restaurant;

    public function __construct(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    public function cost()
    {
        return $this->restaurant->cost();
    }

    public function description()
    {
        return $this->restaurant->description();
    }

}

class FruitDecorator extends KitchenDecorator
{
    protected $decorator;

    public function __construct(Restaurant $restaurant)
    {
        parent::__construct($restaurant);
        $this->decorator = $restaurant;
    }

    public function cost()
    {
        return $this->decorator->cost() + 10;
    }

    public function description()
    {
        return $this->decorator->description() . ' + Fruit';
    }

}

class MeetDecorator extends KitchenDecorator
{
    protected $decorator;

    public function __construct(Restaurant $restaurant)
    {
        parent::__construct($restaurant);
        $this->decorator = $restaurant;
    }

    public function cost()
    {
        return $this->decorator->cost() + 10;
    }

    public function description()
    {
        return $this->decorator->description() . ' + Meet';
    }

}

class SaladDecorator extends KitchenDecorator
{
    protected $decorator;

    public function __construct(Restaurant $restaurant)
    {
        parent::__construct($restaurant);
        $this->decorator = $restaurant;
    }

    public function cost()
    {
        return $this->decorator->cost() + 10;
    }

    public function description()
    {
        return $this->decorator->description() . ' + Salad';
    }

}

$menu = new SaladDecorator(new MeetDecorator(new FruitDecorator(new Table)));

echo $menu->description() . ": " . $menu->cost();