<?php
$servername = "rizkydb"; 
$username = "root";
$password = "ghgjkdf";
$dbname = "uas_cloud_2212500389_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
