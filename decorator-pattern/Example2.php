<?php

namespace Example2;

abstract class Bevarage {
    protected bool $hasMilk = false;
    protected bool $hasSugar = false;

    public function setHasMilk(bool $hasMilk): bool
    {
        return $this->hasMilk = $hasMilk;
    }
    public function setHasSugar(bool $hasSugar): bool
    {
        return $this->hasSugar = $hasSugar;
    }

    public function hasMilk(): bool
    {
        return $this->hasMilk;
    }

    public function hasSugar(): bool
    {
        return $this->hasSugar;
    }

    public function getCost(): float
    {
        $condimentCost = 0;

        if ($this->hasMilk()) {
            $condimentCost += 0.5;
        }

        if ($this->hasSugar()) {
            $condimentCost += 0.3;
        }

        return $condimentCost;
    }
}

class DarkRoast extends Bevarage {

    public function getCost(): float
    {
        return 1.99 + parent::getCost();
    }
}

class Decaf extends Bevarage {

    public function getCost(): float
    {
        return 2.99 + parent::getCost();
    }
}

$coffee = new DarkRoast();
$coffee->setHasMilk(true);
echo 'Dark roast coffee price is: ' . $coffee->getCost() . PHP_EOL;

$decafCoffee = new Decaf();
echo 'Decaf coffee price is: ' . $decafCoffee->getCost();

