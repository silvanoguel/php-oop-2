<?php

include_once __DIR__ . '/Models/Category.php'

class Product {
    public $img;
    public $name;
    public $price;
    public $category;

    function __construct($_img, $_name, $_price, $_category) {
        $this->img = $_img;
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }
}

?>