<?php

namespace Class;

use Class\interface\ExpressoCoffeeInterface;
use Class\interface\IrishCoffeeInterface;
use Class\Traits\EspressoCoffeeTrait;
use Class\Traits\IrishCoffeeTrait;

class MultiCoffee extends CoffeeMaker {

use IrishCoffeeTrait;

use EspressoCoffeeTrait;
}