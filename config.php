<?php
$host = 'localhost';  
$dbname = 'products';  
$username = 'root';  
$password = '';  
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " successfully connected to the database\n";
} catch(PDOException $e) {
    echo " successfully connected not to the database" . $e->getMessage();
    exit;}
?>
