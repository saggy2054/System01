<?php
include_once('navbar.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Database connection parameters
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "library_system";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
  
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  ?>