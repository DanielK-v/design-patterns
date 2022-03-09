<?php

namespace Example6;

interface Quackable {
    public function speak(): void;
}

interface Flyable {
    public function fly(): void;
}

class NoFlyBehaviour implements Flyable {
    public function fly(): void
    {
        echo 'I can\'t fly.. :(' . PHP_EOL;
    }
}

class FlyWithRocketEngineBehaviour implements Flyable {
    public function fly(): void
    {
        echo 'Now I can fly with my COOL Rocket Engine!' . PHP_EOL;
    }
}

abstract class Duck {
    public function swim(): void
    {
        echo 'Start swiming...' . PHP_EOL;
    }

    abstract public function display();
}


class FlyingRubberDuck extends Duck {

    public function __construct()
    {
        $this->flyable = new NoFlyBehaviour();
    }

    public function display(): void
    {
        echo 'Looks like a redhead duck' . PHP_EOL;
    }

    public function setFlyable(Flyable $flyable): void
    {
        $this->flyable = $flyable;
    }

    public function fly(): void
    {
       $this->flyable->fly();
    }
}

$flyingRubberDuck = new FlyingRubberDuck();
$flyingRubberDuck->fly();

$flyWithRocketEngineBehaviour = new FlyWithRocketEngineBehaviour();
$flyingRubberDuck->setFlyable($flyWithRocketEngineBehaviour);
$flyingRubberDuck->fly();
