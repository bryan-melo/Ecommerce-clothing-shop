<?php
    $products = $product->getData();
?>

<!-- Banner Image Women -->
<section id="banner_image_women">
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

            <?php foreach($products as $item) { 
                if ($item['item_id'] >= 6 && $item['item_id'] <= 10) { ?> 
        
            <div class="item" py-2>
                <div class="product font-rale">
                    <a href="product.html"><img src="<?php echo $item['item_image'] ?? "../assets/Products/women/image1.png" ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center py-2">
                        <h6><?php echo $item['item_name'] ?? "Unknown" ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0' ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>

            <?php }} // closing foreach ?>

        </div>
        <!-- !owl carousel -->
    </div>
    <br><br><br><br><br>
</section>
<!-- !Women's Clothing -->