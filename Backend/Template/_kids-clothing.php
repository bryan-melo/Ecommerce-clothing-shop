<?php

$products = $product->getData();

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['kids-clothing_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<!-- Banner Image Kids -->
<section id="banner_image_kids">
    <div class="container py-5 text-center">
        <img src="/assets/bannerImages/image3.png" alt="banner2" class="img-fluid">
    </div>
</section>
<!-- !Banner Image Kids -->

<!-- Kid's Clothing -->
<section id="kid-clothing">
    <div class="container py-5">
        <h4 class="font-rubik font-size-30">Kid's Clothing</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">

            <?php foreach ($products as $item) {
                if ($item['item_id'] >= 11 && $item['item_id'] <= 15) { ?>

                    <div class="item" py-2>
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', '/Backend/product.php', $item['item_id']) ?>">
                                <img src="<?php echo $item['item_image'] ?? "../assets/Products/kids/image1.png" ?>"
                                    alt="product1" class="img-fluid">
                            </a>
                            <div class="text-center py-2">
                                <h6>
                                    <?php echo $item['item_name'] ?? "Unknown" ?>
                                </h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>&#65284;
                                        <?php echo $item['item_price'] ?? '0' ?>
                                    </span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In Cart</button>';
                                    } else {
                                        echo '<button type="submit" name="kids-clothing_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php }
            } // closing foreach 
            ?>

        </div>
        <!-- !owl carousel -->
    </div>
    <br><br><br><br><br>
</section>
<!-- !Kid's Clothing -->