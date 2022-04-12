<?php

namespace Example1;

abstract class Bevarage {
    abstract protected function getDescription(): string;
    abstract protected function getCost(): float;
}

class DarkRoast extends Bevarage {

    public function getDescription(): string
    {
        return 'Dark Roast coffee';
    }

    public function getCost(): float
    {
        return 1.50;
    }
}

class Decaf extends Bevarage {

    public function getDescription(): string
    {
        return 'Decaf coffee';
    }

    public function getCost(): float
    {
        return 1.20;
    }
}

class Espresso extends Bevarage {

    public function getDescription(): string
    {
        return 'Decaf coffee';
    }

    public function getCost(): float
    {
        return 0.9;
    }
}