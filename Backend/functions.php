<?php

    /* Required Files */

// require MySQL Connection
require ("../database/DBController.php");

// require Product.php class
require("../database/Product.php");

// require Cart Class
require("../database/Cart.php");


    /* Objects */

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$products = $product->getData();

// Cart object
$Cart = new Cart($db);

