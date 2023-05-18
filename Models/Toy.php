<?php 

require_once __DIR__ . "/Product.php";

class Toy extends Product{
    public $material;
    public $color;
    
    function __construct(String $_name, Float $_price, Category $_category, String $_material, String $_color,  String $_img ="default") {
        parent::__construct($_name, $_price, $_category, $_img);
        $this->material = $_material;
        $this->color = $_color;
    }

    function getDetails() {
        return "{$this->material}, {$this->color}";
    }
}
