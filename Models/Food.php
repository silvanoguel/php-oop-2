<?php 

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    public function __construct(String $_name, String $_price, Category $_category, String $_img) {
        parent::__construct($_name, $_price, $_category, $_img);
      
    }
}
