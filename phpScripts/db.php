<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost:3306";  // or "localhost:3306"
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password is empty
$dbname = "useraccounts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to server: $servername, database: $dbname";
}

// Test a simple query
$sql = "SELECT COUNT(*) AS num_users FROM users";  // Replace 'tablename' with your actual table name
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo "Number of users: " . $row['num_users'];
} else {
    echo "Query failed: " . $conn->error;
}
?>
