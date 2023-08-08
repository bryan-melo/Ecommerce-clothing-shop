<!--  product -->
<?php
$item_id = $_GET['item_id'] ?? 1;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['product_submit'])) {
    if (isset($_SESSION["user_id"])) {
      $user_id = $_SESSION["user_id"];
    } else {
      // Handle the case where the user is not logged in
      header("Location: /Backend/login.php");
      exit();
    }

    $item_id = isset($_POST['item_id']) ? intval($_POST['item_id']) : 0;

    $Cart->addToCart($user_id, $item_id);

    // Redirect to prevent form resubmission on page refresh
    header("Location: {$_SERVER['REQUEST_URI']}");
    exit();
  }
}

foreach ($product->getData() as $item):

  if ($item['item_id'] == $item_id):
    ?>

    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- Product Image & Buy Buttons -->
          <div class="col-sm-6">
            <img src="<?php echo $item['item_image'] ?? "../assets/Products/men/image1.png" ?>" alt="product"
              class="img-fluid">
            <div class="form-row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control" style="width: 95%;">Proceed to Buy</button>
              </div>
              <div class="col" style="padding-top: 5px;">
                <form method="post">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                  <?php
                  if (in_array($item['item_id'], $Cart->getCartId($product->getDataForUserCart('cart')) ?? [])) {
                    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control" style="width: 95%;">In the Cart</button>';
                  } else {
                    echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-16 form-control" style="width: 95%;">Add to Cart</button>';
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>
          <!-- !Product Image & Buy Buttons -->

          <div class="col-sm-6 py-5">
            <!--- Product Name -->
            <h3>
              <?php echo $item['item_name'] ?? "Unknown" ?>
            </h3>

            <!-- Product Brand & Ratings -->
            <small>by
              <?php echo $item['item_brand'] ?? "Unknown" ?>
            </small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-16">20,324 ratings</a>
            </div>
            <hr class="m-1">
            <!-- !Product Brand & Ratings -->

            <!-- Product Price -->
            <table class="d-flex justify-content-between mt-5" style="padding-top: 10px;">
              <tr class="font-rale font-size-20">
                <td>Price:
                <td class="font-size-20 text-danger">&emsp;$<span>
                    <?php echo $item['item_price'] ?? '0' ?>
                  </span></td>
                </td>
              </tr>
            </table>
            <!--- !Product Price -->

            <!-- Product Colors -->
            <div class="row mt-5">
              <div class="col-6">
                <div class="color">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo" style="padding-top: 10px; font-size: 14pt;">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle"
                      style="background-color: <?php echo $item['item_color'] ?? "color-yellow-bg" ?>; margin-right: 175px;">
                      <button class="btn font-size 14"></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- !Product Color -->

              <!-- Product Size -->
              <div class="size mt-5">
                <div class="d-flex justify-content-between w-50">
                  <h6 class="font-baloo" style="padding-top: 10px; padding-right: 15px; font-size: 14pt;">Size:</h6>
                  <div class="font-rubik border p-2">
                    <button id="clickButton1" class="btn p-0 font-size-12" onclick="buttonClick(event)">Small</button>
                  </div>
                  <div class="font-rubik border p-2">
                    <button id="clickButton2" class="btn p-0 font-size-12" onclick="buttonClick(event)">Medium</button>
                  </div>
                  <div class="font-rubik border p-2">
                    <button id="clickButton3" class="btn p-0 font-size-12" onclick="buttonClick(event)">Large</button>
                  </div>
                </div>
              </div>
              <!-- !Product Size -->
            </div>

            <!-- Product Description -->
            <div class="col-12 mt-5">
              <h6 class="font-rubik">Product Description</h6>
              <hr>
              <p class="font-rale font-size-14">
                <?php echo $item['item_description'] ?? "No description" ?>
              </p>
            </div>
            <!-- !Product Description -->

            <hr>

            <!--- Policy -->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center m-2" style="padding-left: 5%;">
                  <div class="font-size-20 my-2 color-second m-2">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">30-day<br>Returns</a>
                </div>
                <div class="return text-center m-2">
                  <div class="font-size-20 my-2 color-second m-2">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1-year<br>Warranty</a>
                </div>

                <!--- Order-details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark"
                  style="padding-left: 30%; padding-top: 12%; font-size: 13pt;">
                  <small>Delivery by: April 15 - April 20 </small>
                  <small><i class="fas fa-map-marker-alt solor-primary"></i>&nbsp;&nbsp;Deliver to Customer -42320</small>
                </div>
                <!--- !Order-details-->

              </div>
            </div>
            <!--- !Policy -->

          </div>
        </div>
      </div>
    </section>
    <!--  !Product -->

    <?php
  endif;
endforeach;
?>