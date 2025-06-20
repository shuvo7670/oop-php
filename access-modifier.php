<?php

/**
 *  Access modifiers
 * 
 * Public -> Access from anywhere
 * Private -> Can't able to access from extended class only access on that class
 * Protected -> can be access inside extended class 
*/

class Ratnar_Maa {

    public function __construct() {
        $this->bari();
    }

    public function gold_paichi(){
        echo "Amr kache onk gula sorno pabe ratna" . "<br>";
    }

    public function jomi_paichi(){
        echo "Onk gula jomi" . "<br>";
    }

    // can access from this class 
    private function bari() {
        echo "Aita kaw k dibo na" . "<br>";
    }

    protected function pukur() {
        echo "This can be access from extended class" . "<br>";
    }

}


// Inheritance
class Ratna extends Ratnar_Maa {
    public function __construct() {
        $this->gold_paichi();
        $this->jomi_paichi();
        $this->pukur();
    }
}

// new Ratna();
$ratnar_maa = new Ratnar_Maa();
// $ratnar_maa->pukur();
// $ratnar_maa->bari();