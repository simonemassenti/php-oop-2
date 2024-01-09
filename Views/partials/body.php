<div class="container">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $product->get_image(); ?>" class="card-img-top" alt="<?php echo $product->get_name(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                        <p class="card-text"><?php echo $product->get_price(); ?> €</p>
                        <div class="d-flex">
                            <h5>Categoria:</h5>
                            <p><?php echo $product->get_category()->get_name(); ?></p>
                            <img src="<?php echo $product->get_category()->get_icon(); ?>" class="card-img-top w-25" alt="<?php echo $product->get_category()->get_name(); ?>">
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>