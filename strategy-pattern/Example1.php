<?php

namespace Example1;

abstract class Duck {
    public function speak(): void
    {
        echo 'Quack' . PHP_EOL;
    }

    public function swim(): void
    {
        echo 'Start swiming...' . PHP_EOL;
    }

    abstract public function display();
}

class RedheadDuck extends Duck {
    public function display(): void
    {
        echo 'Looks like a redhead duck' . PHP_EOL;
    }
}

class BrownheadDuck extends Duck {
    public function display(): void
    {
        echo 'Looks like a brownhead duck' . PHP_EOL;
    }
}



$redheadDuck = new RedheadDuck();
$brownheadDuck = new BrownheadDuck();

//Redhead duck
$redheadDuck->display();
$redheadDuck->swim();
$redheadDuck->speak();

echo PHP_EOL;

//Brownhead duck
$brownheadDuck->display();
$brownheadDuck->swim();
$brownheadDuck->speak();




