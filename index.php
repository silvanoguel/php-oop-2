<?php

include_once __DIR__ . "/Models/Category.php";
include_once __DIR__ . "/Models/Product.php";
include_once __DIR__ . "/Models/Food.php";


$category = [
    'dog' => new Categorie('dog'),
    'cat' => new Categorie('cat'),
];

$prodotti = [
    new Food("https://www.bricosi.it/files/archivioready_Files/Foto/224658_1.JPG","Simba Dog",  200 , $category['dog'], "ciao", "riso"),
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
    
    <div class="container">
        <h2>OUR PRODUCTS</h2>
        <div class="row">
            <?php
            // Ciclo per scorrere l'array dei prodotti
            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria "dog"
                if ($element->category->nome == 'dog') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->name ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->name ?>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->price ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            weight:
                            <?php echo $element->weight ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredients:
                            <?php echo $element->ingredient ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria "cat"
                if ($element->category->name == 'cat') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->name ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->name ?>

                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->price ?> €
                        </h5>

                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

        </div>
    </div>


</html>