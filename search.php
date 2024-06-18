<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Little1314107';
$database = 'marsia_travels';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT naam FROM bestemmingen WHERE naam LIKE :query";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['query' => '%' . $query . '%']);
    $bestemmingen = $stmt->fetchAll(PDO::FETCH_COLUMN);

    echo json_encode($bestemmingen);
}
?>

