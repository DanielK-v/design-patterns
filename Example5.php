<?php

namespace Example5;

interface Quackable {
    public function speak(): void;
}

interface Flyable {
    public function fly(): void;
}

class FlyWithWingsBehaviour implements Flyable {
    public function fly(): void
    {
        echo 'Start flying with wings...' . PHP_EOL;
    }
}

class FlyWithRocketEngineBehaviour implements Flyable {
    public function fly(): void
    {
        echo 'Start flying with a rocket engene... WHAT A DUCK!' . PHP_EOL;
    }
}

class QuackBehaviour implements Quackable {
    public function speak(): void
    {
        echo 'Qack, quack..' . PHP_EOL;
    }
}

class SqueakBehaviour implements Quackable {
    public function speak(): void
    {
        echo 'Squeak, squeak..' . PHP_EOL;
    }
}

abstract class Duck {
    public function swim(): void
    {
        echo 'Start swiming...' . PHP_EOL;
    }

    abstract public function display();
}

class RedheadDuck extends Duck {

    private Quackable $quackable;
    private Flyable $flyable;

    public function __construct(Flyable $flyable, Quackable $quackable)
    {
        $this->flyable = $flyable;
        $this->quackable = $quackable;
    }

    public function speak(): void
    {
        $this->quackable->speak();
    }
    public function display(): void
    {
        echo 'Looks like a redhead duck' . PHP_EOL;
    }

    public function fly(): void
    {
        $this->flyable->fly();
    }
}

class FlyingRubberDuck extends Duck {
    private Quackable $quackable;
    private Flyable $flyable;

    public function __construct(Flyable $flyable, Quackable $quackable)
    {
        $this->flyable = $flyable;
        $this->quackable = $quackable;
    }

    public function speak(): void
    {
        $this->quackable->speak();
    }
    public function display(): void
    {
        echo 'Looks like a redhead duck' . PHP_EOL;
    }

    public function fly(): void
    {
        $this->flyable->fly();
    }
}


$flyWithWingsBehaviour = new FlyWithWingsBehaviour();
$qackBehaviour = new QuackBehaviour();
$redheadDuck = new RedheadDuck($flyWithWingsBehaviour, $qackBehaviour);

$redheadDuck->fly();
$redheadDuck->speak();

echo PHP_EOL;

$flyWithEngineBehaviour = new FlyWithRocketEngineBehaviour();
$squeakBehaviour = new SqueakBehaviour();
$flyingRubberDuck = new FlyingRubberDuck($flyWithEngineBehaviour, $squeakBehaviour);

$flyingRubberDuck->fly();
$flyingRubberDuck->speak();
