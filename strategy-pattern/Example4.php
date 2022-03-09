<?php

namespace Example4;

interface Quackable {
    public function speak(): void;
}

interface Flyable {
    public function fly(): void;
}

abstract class Duck {
    public function swim(): void
    {
        echo 'Start swiming...' . PHP_EOL;
    }

    abstract public function display();
}

class RedheadDuck extends Duck implements Quackable, Flyable {
    public function speak(): void
    {
        echo 'Quack' . PHP_EOL;
    }
    public function display(): void
    {
        echo 'Looks like a redhead duck' . PHP_EOL;
    }

    public function fly(): void
    {
        echo 'Start flying' . PHP_EOL;
    }
}

class RubberDuck extends Duck implements Quackable {
    public function speak(): void
    {
        echo 'Squeak' . PHP_EOL;
    }

    public function display(): void
    {
        echo 'Looks like a rubber duck' . PHP_EOL;
    }
}

class DecoyDuck extends Duck {
     public function display(): void
     {
         echo 'Looks like a decoy duck' . PHP_EOL;
     }
}

$redheadDuck = new RedheadDuck();
$rubberDuck = new RubberDuck();

//Redhead duck
$redheadDuck->display();
$redheadDuck->speak();
$redheadDuck->fly();

echo PHP_EOL;

//Rubber duck
$rubberDuck->display();
$rubberDuck->speak();