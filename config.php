<?php
session_start();

// Database configuration
$host     = "localhost";
$username = "root";
$password = "";
$database = "inventaris_gudang";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);
?>
