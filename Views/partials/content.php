<main>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo $product->img ?>" class="card-img-top h-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <i class="<?php echo $product->category->icon; ?>"></i>
                            <p>Category: <?php echo $product->category->name ?></p>
                            <p> PRICE: € <?php echo $product->price ?></p>
                            <p><?php echo $product->getDetails(); ?></p>
                            <p><?php echo $product->getWeight(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</main>