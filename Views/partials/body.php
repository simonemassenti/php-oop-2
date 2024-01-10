<h1 class="text-center my-2">Welcome to the Pet Shop</h1>

<div class="container py-4">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $product->get_image(); ?>" class="card-img-top" alt="<?php echo $product->get_name(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <?php echo $product->get_price(); ?> €
                            </li>
                            <li class="list-group-item">
                            Categoria: <?php echo $product->get_category()->get_name(); ?>
                            <img src="<?php echo $product->get_category()->get_icon(); ?>" alt="<?php echo $product->get_category()->get_name(); ?>">
                            </li>
                            <li class="list-group-item">
                                <?php if(is_a($product, "Food")) { ?>
                                    Scadenza: <?php echo $product->get_expiration(); ?>
                                <?php } else if(is_a($product, "Toy")) { ?>
                                    Materiale: <?php echo $product->get_material(); ?>
                                <?php } else if(is_a($product, "House")) { ?>
                                    Materiale: <?php echo $product->get_type(); ?>
                                <?php } ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $product->get_ship(); ?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>