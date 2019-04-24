<?php 
//config.php
 ?>
 <?php
$servername = "localhost";
$username = "u308316020_nghia";
$password = "261997";
$dbname = "u308316020_like";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 