<?php 

require_once '_Product.php';
require_once 'Product.php';

$_product_obj = new _Product\Product();
$_product_obj->product_name();

$proudct_obj = new App\Product\Product();
$proudct_obj->product_name();
