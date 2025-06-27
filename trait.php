<?php 
/**
 * Trait
 * We can use multiple trait inside a class
 */

trait Brother {
    public function brother_name() {
        echo "I am Brother";
    }
}
trait Sister {
    public function sister_name() {
        echo "I am Sister";
    }
}

class Father {
    use Brother;
    use Sister;
    public function __construct()
    {
        $this->brother_name();
        $this->sister_name();
    }
}
new Father();
