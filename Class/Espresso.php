<?php 

namespace Class;

use Class\interface\ExpressoCoffeeInterface;
use Class\Traits\EspressoCoffeeTrait;
use Class\Traits\IrishCoffeeTrait;

class Espresso extends CoffeeMaker  
{
use EspressoCoffeeTrait;
use IrishCoffeeTrait;
}