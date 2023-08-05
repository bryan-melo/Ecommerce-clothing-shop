 <!--  product -->
 <?php
  $item_id = $_GET['item_id'] ?? 1;
  foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
  ?>

     <section id="product" class="py-3">
       <div class="container">
         <div class="row">
           <!-- Product Image & Buy Buttons -->
           <div class="col-sm-6">
             <img src="<?php echo $item['item_image'] ?? "../assets/Products/men/image1.png" ?>" alt="product" class="img-fluid">
             <div class="form-row pt-4 font-size-16 font-baloo">
               <div class="col">
                 <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
               </div>
               <div class="col">
                 <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
               </div>
             </div>
           </div>
           <!-- Product Image & Buy Buttons -->

           <div class="col-sm-6 py-5">
             <!--- Product Name -->
             <h3><?php echo $item['item_name'] ?? "Unknown" ?></h3>

             <!-- Product Brand & Ratings -->
             <small>by <?php echo $item['item_brand'] ?? "Unknown" ?></small>
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
             <!-- Product Brand & Ratings -->

             <!-- Product Price -->
             <table class="d-flex justify-content-between my-3" style="padding-top: 10px;">
               <tr class="font-rale font-size-20">
                 <td>Price:
                 <td class="font-size-20 text-danger">&emsp;$<span><?php echo $item['item_price'] ?? '0' ?></span></td>
                 </td>
               </tr>
             </table>
             <!--- Product Price -->

             <!-- Product Colors -->
             <div class="row">
               <div class="col-6">
                 <div class="color my-3">
                   <div class="d-flex justify-content-between">
                     <h6 class="font-baloo" style="padding-top: 10px; font-size: 14pt;">Color:</h6>
                     <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size 14"></button></div>
                     <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size 14"></button></div>
                     <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size 14"></button></div>
                   </div>
                 </div>
               </div>
               <!-- Product Color -->

               <!-- Product Size -->
               <div class="size my-3">
                 <div class="d-flex justify-content-between w-50">
                   <h6 class="font-baloo" style="padding-top: 10px; padding-right: 15px; font-size: 14pt;">Size:</h6>
                   <div class="font-rubik border p-2">
                     <button class="btn p-0 font-size-12">Small</button>
                   </div>
                   <div class="font-rubik border p-2">
                     <button class="btn p-0 font-size-12">Medium</button>
                   </div>
                   <div class="font-rubik border p-2">
                     <button class="btn p-0 font-size-12">Large</button>
                   </div>
                 </div>
               </div>
               <!-- Product Size -->

               <!-- Product qty section -->
               <div class="col-6" style="padding-top: 20px; padding-bottom: 50px;">
                 <div class="qty d-flex">
                   <h6 class="font-baloo" style="padding-top: 10px; font-size: 14pt;">Qty:</h6>
                   <div class="px-4 d-flex font-rale">
                     <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                     <input type="text" data-id="pro1" class="qty_input border px-2 w-25 bg-light" style="text-align: center;" disabled value="1" placeholder="1">
                     <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                   </div>
                 </div>
               </div>
             </div>
             <!-- Product qty section -->

             <!-- Product Description -->
             <div class="col-12">
               <h6 class="font-rubik">Product Description</h6>
               <hr>
               <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                 voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                 voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </div>
             <!-- Product Description -->

             <hr>

             <!--- #policy -->
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
                 <div id="order-details" class="font-rale d-flex flex-column text-dark" style="padding-left: 30%; padding-top: 12%; font-size: 13pt;">
                   <small>Delivery by: April 15 - April 20 </small>
                   <small><i class="fas fa-map-marker-alt solor-primary"></i>&nbsp;&nbsp;Deliver to Customer -42320</small>
                 </div>
                 <!--- Order-details-->
               </div>
             </div>
             <!--- #policy -->

           </div>
         </div>
       </div>
     </section>
     <!--  !product -->

 <?php
    endif;
  endforeach;
  ?>