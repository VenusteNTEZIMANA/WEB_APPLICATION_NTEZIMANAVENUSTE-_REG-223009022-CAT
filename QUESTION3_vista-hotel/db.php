<?php
$host = 'localhost';
$dbname = 'hotel_db';
$username = 'root';
$password = '';   // change if you set password in XAMPP

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch(Exception $e) {
    die("Database error: " . $e->getMessage());
}
?>