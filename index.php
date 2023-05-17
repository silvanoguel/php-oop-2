<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";


$category = [
    "dog" => new Category("dog"),
    "cat" => new Category("cat"),
]

$products = [
    new Food(1,5, $category["dog"],"riso"),

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OOP 2</title>
</head>
<body>

    <?php foreach ($products as $product) : ?>
        <div class="col">
            <div class="card mx-auto h-100" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title"><?= $category->name ?></h3>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    
</body>
</html>