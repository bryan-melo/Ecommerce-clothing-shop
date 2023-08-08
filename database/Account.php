<?php

class Account
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) {
            throw new Exception("Invalid database connection.");
        }
        $this->db = $db;
    }
    public function loginUser($email, $password)
    {
        $conn = $this->db->con;

        // Sanitize inputs
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Query to retrieve user data based on email
        $query = "SELECT user_id, email, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            if ($user && password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user_id"] = $user["user_id"];
                // Redirect to logged-in page
                header("Location: ../Backend/index.php");
                exit();
            } else {
                // Invalid credentials, show error message
                echo "Invalid email or password.";
            }
        } else {
            // Database error
            echo "Database error: " . mysqli_error($conn);
        }
    }

    public function createAccount($email, $first_name, $last_name, $password, $confirm_password)
    {
        $conn = $this->db->con;

        // Check if passwords match
        if ($password !== $confirm_password) {
            return "Passwords do not match.";
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $query = "INSERT INTO user (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$hashed_password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Success";
            return true; // Account created successfully
        } else {
            echo "No Success";
            return "Error creating account: " . mysqli_error($conn);
        }
    }
    public function getUserByID($user_id)
    {
        $query = "SELECT * FROM user WHERE user_id = $user_id";
        $result = $this->db->con->query($query);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null; // User not found
        }
    }

    public function getMostRecentID() {
        return $this->db->con->insert_id;
    }
}