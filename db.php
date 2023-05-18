<?php
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
$cat_category = new Category("cat", "fa-solid fa-cat");
$fish_category = new Category("fish", "fa-solid fa-fish");

$my_cat = new Food("Whiskas", 2, $cat_category, "https://shop-cdn-m.mediazs.com/bilder/whiskas/rind/6/400/new_project_2023_01_30t132841_610_6.jpg");
$kong_toy = new Toy("Kong", 10, $dog_category, "caucciù", "red", "https://www.cani.it/img/products/00135055.jpg");
$my_dog = new Food("Royal Canin", 2.5, $dog_category, "https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/8/400/rc_shn_adultmini_mv_eretailkit_de_de_8.jpg");
$my_fish = new Food("Tetra", 9.99, $fish_category, "https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dw0cc2ccb6/large/TETRAGOLDFISHPROSSI100ML-4004218728141-1.png");

$products = [
    $my_cat,
    $my_dog,
    $kong_toy,
    $my_fish,
];

foreach($products as $product) {
    $product->setWeight(rand(1, 50), 'grams');
}


// Exception
$paperella = new Toy("paperella", 5, $dog_category, "caucciù", "yellow", "");
$paperella->calcDiscount("66");

?>