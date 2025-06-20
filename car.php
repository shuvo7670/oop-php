<?php 

// variable
$var = "Hello World";
// function 
function func() {

}

// Class 
class Car {
    // Property
    public $var2 = "Hello World 2";
    // function __construct(){
    //     echo "Tesla Model X from const";
    // }
    
    // Method 
    function car_name($name){
        echo $name;
    }

    function car_color($color){
        echo $color;
    }

}

// Object
$carobj = new Car();
$carobj->car_name("Tesla Model XYZ");
// $carobj->car_color("Green");