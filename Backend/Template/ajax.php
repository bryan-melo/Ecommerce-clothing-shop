<?php

// require MySQL Connection
require ("/Users/bryanmelo/Desktop/school/SJSU/Summer 2023/CS 157A/finalProjectDatabaseSys/database/DBController.php");

// require Product.php class
require("/Users/bryanmelo/Desktop/school/SJSU/Summer 2023/CS 157A/finalProjectDatabaseSys/database/Product.php");

$db = new DBController();
$product = new Product($db);

if (isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

