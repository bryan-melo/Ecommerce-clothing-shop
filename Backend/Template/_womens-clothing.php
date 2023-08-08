<!-- Banner Image Women -->
<section id="banner_image_women" style="margin-bottom: -60px;">
    <div class="container py-5 text-center">
        <img src="/assets/bannerImages/image2.png" alt="banner2" class="img-fluid">
    </div>
</section>
<!-- !Banner Image Women -->

<!-- Women's Clothing -->
<section id="women-clothing">
    <div class="container py-5">
        <h4 class="font-rubik font-size-30">Women's Clothing</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">

            <?php foreach ($product->getData() as $item) {
                if ($item['item_id'] >= 6 && $item['item_id'] <= 10) { ?>

                    <div class="item" py-2>
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', '/Backend/product.php', $item['item_id']) ?>">
                                <img src="<?php echo $item['item_image'] ?? "../assets/Products/women/image1.png" ?>"
                                    alt="product1" class="img-fluid">
                            </a>
                            <div class="text-center py-2 pt-3">
                                <h6 class="font-rubik">
                                    <?php echo $item['item_name'] ?? "Unknown" ?>
                                </h6>
                                <small>by
                                    <?php echo $item['item_brand'] ?? "Unknown" ?>
                                </small>
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
    <br><br><br>
    <hr>
    <br><br><br>
</section>
<!-- !Women's Clothing -->