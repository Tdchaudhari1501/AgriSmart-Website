<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "Admin";  
$dbPassword = "Tushar@1501";  
$dbName     = "agrismart";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}