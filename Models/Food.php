<?php 

include_once __DIR__ . '/Product.php';

class Food extends Prodotto{
    public $weight;
    public $ingredient;
    
    public function __construct($_weight, $_ingredient, $_img, $_name, $_price, $_category) {
        $this->weight = $_weight;
        $this->ingredient = $_ingredient;
        parent::__construct($_img, $_name, $_price, $_category);
    }
}

?>