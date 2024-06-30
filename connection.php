<?php
$host = 'localhost';
$dbname = 'marsia_travels';
$username = 'root';
$password = 'Little1314107';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

