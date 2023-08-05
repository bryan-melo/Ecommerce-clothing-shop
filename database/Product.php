<?php

// This class is used to fetch product data from a database.
class Product
{
    public $db = null;

    // Constructor that takes a DBController object as input.
    // If the provided DBController object doesn't have a valid connection,
    // Then the constructor returns null.

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // Fetches all product data from a specified table using the getData method.
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // Fetches product data one by one and adds them to the result array.
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // Gets product data based on the provided item_id and table.
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * 
            FROM {$table} 
            WHERE item_id={$item_id}");

            $resultArray = array();

            // Fetches product data one by one and adds them to the result array.
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}
