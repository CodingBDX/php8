<?php

namespace Class;

abstract class Vehicule 
{

    public function __construct(protected string $marque)
    {}
    
        abstract public function marque($test = 'test'): string;
}
?>