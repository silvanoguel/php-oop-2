<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../Traits/Weightable.php";


class Product {

    use Weightable;

    public $name;
    public $price;
    public $category;
    public $img;

    function __construct(String $_name, Float $_price, Category $_category, String $_img = "default") {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }

    function getDetails() {
        return "";
    }

    function calcDiscount($age) {
        if(!is_numeric($age)) {
            throw new Exception('please insert a valid number');
        }

        if($age > 65) {
            return 'you have 30% discount';
        } 
    }
}
