<?php

namespace Class;

abstract class CoffeeMaker

{
public function MakeCoffee(): string 
{
    return static::class . 'fait un cafe';
}
}