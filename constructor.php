<?php 
/**
 * Property -> Variable inside a Class
 * Method -> Function inside a class
 * Constructor -> Initial call when class loaded
 * Distructor -> End call when class loaded
 * Magic Method -> Constructor, Distructor
 * This -> Call another method inside a method
*/

class Shobuj {
    // Call at initial object create
    function __construct(){
        // Call another method inside a method
        $this->print_my_name();
    }

    function print_my_name()
    {
        echo "Amr name shobuj from print my name";
    }

    function __destruct(){
        echo "Hello World 2";
    }

}

new Shobuj();