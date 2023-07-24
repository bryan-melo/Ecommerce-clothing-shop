<?php 
class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "clothes";

    // Connection property
    public $con = null;

    // Constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Connection failed: " . $this->con->connect_error;
        }
    }

    // Destructor to close the connection
    public function __destruct()
    {
        $this->closeConnection();
    }

    // Method to close the MySQLi connection
    protected function closeConnection()
    {
        if ($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}
