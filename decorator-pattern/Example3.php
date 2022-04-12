<?php

namespace Example3;

abstract class Beverage {
    protected string $description = 'Unknown beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function getCost();
}

abstract class CondimentDecorator extends Beverage {

    protected Beverage $beverage;

    public function getDescription(): string
    {
        return 'Unknown condiment';
    }

    abstract public function getCost();
}

class DarkRoast extends Beverage {

    public function getDescription(): string
    {
        return 'Dark roast coffee';
    }

    public function getCost(): float
    {
        return 1.99;
    }
}

class Milk extends CondimentDecorator {

    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }


    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' with Milk';
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 0.5;
    }
}

class Sugar extends CondimentDecorator {

    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }


    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' with Sugar';
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 0.2;
    }
}

$coffee = new DarkRoast();
echo $coffee->getDescription() . ' - ' . $coffee->getCost() . PHP_EOL;

$coffeeWithMilk = new Milk($coffee);
echo $coffeeWithMilk->getDescription() . ' - ' . $coffeeWithMilk->getCost() . PHP_EOL;

$coffeeWithMilkAndSugar = new Sugar($coffeeWithMilk);
echo $coffeeWithMilkAndSugar->getDescription() . ' - ' . $coffeeWithMilkAndSugar->getCost();