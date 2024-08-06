<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "Taal_RHU_System"; // The database name you've created

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Close the connection
// Uncomment this line to close the connection after operations
// $conn->close();
?>
