<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deleterecord = $Cart->deleteCartItem($_POST['item_id']);
    }
}
?>

<!-- Shopping cart section -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- shopping cart items -->
        <div class="row" style="width: 110%;">
            <div class="col-sm-9">

                <?php
                foreach ($product->getDataForUserCart('cart') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $cartTotal[] = array_map(function ($item) {
                ?>
                        <!-- cart items-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <a href="<?php printf('%s?item_id=%s', '/Backend/product.php', $item['item_id']) ?>">
                                    <img src="<?php echo $item['item_image'] ?? "../assets/Products/men/image1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid"></a>
                            </div>

                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? "Unknown" ?></small>

                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale" style="width: 15%; margin-right: 20px;">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" style="text-align: center;" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <!-- !product qty -->

                                    <!-- Remove Item -->
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn fas fa-trash text-danger px-3 border-right"></button>
                                    </form>
                                    <!-- !Remove Item -->
                                </div>
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    &#65284;<span class="product_price" data-id="<?php echo $item['item_id'] ?? 0; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart items-->
                <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;
                ?>

            </div>
            <!-- subtotal section -->
            <div class="col-sm-3" style="padding-left: 50px;">
                <div class="sub-total border text-center mt-2">
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (
                            <?php
                            $itemCount = count($product->getDataForUserCart('cart'));
                            echo $itemCount;
                            if ($itemCount > 1) {
                                print(" items");
                            }
                            if ($itemCount == 1) {
                                print(" item");
                            } ?> ):&nbsp;
                            <span class="text-danger">&#65284;<span class="text-danger" id="deal-price"><?php echo isset($cartTotal) ? $Cart->getSum($cartTotal) : 0 ?></span></span>
                        </h5>
                        <button type="submit" class="btn btn-warning mt-3" style="width: 50%;">Checkout</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section -->
        </div>
        <!-- shopping cart items -->
    </div>
</section>
<!-- Shopping cart -->