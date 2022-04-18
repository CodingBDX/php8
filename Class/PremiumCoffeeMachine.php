<?php

namespace Class;

class PremiumCoffeeMachine extends CoffeeMachine
 {

public function __construct(int $cups)
{
parent::__construct($cups);
    var_dump('hello world');
}


    public function select(string $selection) {

        $result = match($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'error'



        };
        return $result;
    }

}