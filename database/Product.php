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
        if (!isset($db->con)) {
            throw new Exception("DB connection is not set.");
        }
        $this->db = $db;
    }

    // Fetches all product data from product table using the getData method.
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

    public function getDataForUserCart($table = 'product')
    {
        // Check if user is logged in
        if (!isset($_SESSION["user_id"])) {
            return array(); // Return an empty array if user is not logged in
        }

        // Get the user's user_id from the session
        $user_id = $_SESSION["user_id"];

        // Construct the SQL query with a WHERE clause to filter by user_id
        $query = "SELECT * FROM {$table} WHERE user_id = $user_id";
        $result = $this->db->con->query($query);

        $resultArray = array();

        // Fetch product data one by one and add them to the result array
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }



    // Gets product data based on the provided item_id and table.
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // Fetches product data one by one and adds them to the result array.
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}