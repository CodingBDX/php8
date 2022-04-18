<?php 

namespace Class;


class Renault extends Vehicule
 {
    public function marque($test = 'test'): string
    {
        return 'je roule en'. $this->marque . '.';
    }

}
?>