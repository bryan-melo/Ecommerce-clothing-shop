<?php
    $products = $product->getData();
?>

<!-- Banner Image Men -->
<section id="banner_image_men">
    <div class="container py-5 text-center">
        <img src="/assets/bannerImages/image1.png" alt="banner1" class="img-fluid">
    </div>
</section>
<!-- !Banner Image Men -->

<!-- Men's Clothing -->
<section id="men-clothing">
    <div class="container py-5">
        <h4 class="font-rubik font-size-30">Men's Clothing</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">

            <?php foreach($products as $item) { 
                if ($item['item_id'] >= 1 && $item['item_id'] <= 5) { ?> 

            <div class="item" py-2>
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', '/Backend/product.php', $item['item_id']) ?>">
                        <img src="<?php echo $item['item_image'] ?? "../assets/Products/men/image1.png" ?>" alt="product1" class="img-fluid">
                    </a>
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
<!-- !Men's CLothing -->