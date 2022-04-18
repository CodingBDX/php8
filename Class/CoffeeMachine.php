<?php

namespace Class;

class CoffeeMachine {

 protected int $cups;

    public function __construct(int $cups)
    {
$this->cups = $cups;
        
    }
    public function select(string $selection) {

        $result = match($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'error'



        };
        return $result;
    }

 final   protected function makeEspresso() {
        for ($i=0 ; $i < $this->cups  ; $i++ ) { 
            echo 'coffe make n°' . $i . 'good stuff';
        }
    }
}