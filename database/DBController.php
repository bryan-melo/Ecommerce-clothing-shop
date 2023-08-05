<?php 
class DBController
{
    protected $host = "localhost";
    protected $port = 3306;
    protected $socket = "";
    protected $user = "root";
    protected $password = "";
    protected $dbname = "clothes";
    public $con = null; // Database connection property

    // Constructor to establish the database connection
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port, $this->socket);

        if ($this->con->connect_error) {
            die('Could not connect to the database server: ' . $this->con->connect_error);
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // Method to close the database connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}