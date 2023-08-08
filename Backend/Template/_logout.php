<?php
// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: /Backend/login.php"); // Change to the desired URL
exit();
?>
