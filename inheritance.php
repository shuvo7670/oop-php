<?php 

/**
 * Inheritance
 */

class Ratnar_Maa {
    public function gold_paichi(){
        echo "Amr kache onk gula sorno pabe ratna";
    }

    public function jomi_paichi(){
        echo "Onk gula jomi";
    }
}


// Inheritance
class Ratna extends Ratnar_Maa {
    public function __construct() {
        $this->gold_paichi();
        $this->jomi_paichi();
    }
}

new Ratna();