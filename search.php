<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Little1314107';
$database = 'marsia_travels';

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT naam FROM bestemmingen WHERE naam LIKE :query";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['query' => '%' . $query . '%']);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
?>
