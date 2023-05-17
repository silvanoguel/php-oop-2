<?php 

include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredient;
    
    public function __construct($_weight, $_ingredient) {
        $this->weight = $_weight;
        $this->ingredient = $_ingredient;
    }
}

?>