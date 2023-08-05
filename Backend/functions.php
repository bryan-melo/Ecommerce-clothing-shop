<?php

    /* Required Files */

// require MySQL Connection
require ("../database/DBController.php");

// require Product.php class
require("../database/Product.php");


    /* Objects */

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

print_r($product->getData());