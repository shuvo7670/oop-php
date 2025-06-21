<?php 

/**
 *  Abstract
 * can't able to create instance
 * Only use for inheritance
 * can be use like a parent class
 */
abstract class Product {
    public function info() {
        $this->name();
        $this->description();
    }

    public function description() {
        echo "lorem ispum dolor sit amet";
    }
    
    /**
     * Can't have body part
     * can't able to use in this class
     * only use by creating the same name method inside child class
     */
    abstract public function price();

    public function name() {
        echo "Iphone 17";
    }
    
}

class Frontend extends Product {
    public function __construct()
    {
        $this->info();
        $this->price();
    }

    // must be add this method because we have called abstract inside our product class
    public function price() {
        echo "$1200";
    }
}

// new Frontend();



/**
 * 
 * Interface
 */

interface Order {
    public function order_number();
    public function customer_id();
}

class Order_Manage implements Order {

    public function __construct()
    {
        $this->order_number();
        $this->customer_id();
    }

    public function order_number()
    {
        echo "100";
    }

    public function customer_id(){
        echo "#12";
    }
}
new Order_Manage();