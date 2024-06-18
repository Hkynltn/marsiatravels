<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Little1314107';
$database = 'marsia_travels';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database: $database";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
