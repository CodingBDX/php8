<?php 

namespace Class;


class Peugeot extends Vehicule
 {
    public function marque($test = 'test'): string
    {
        return 'je roule en' . $this->marque . '.';
    }

}
?>