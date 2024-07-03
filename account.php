<?php
session_start();
include "connection.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$user = $conn->query("SELECT * FROM gebruikers WHERE gebruiker_id = $user_id")->fetch();
$bookings = $conn->query("SELECT * FROM boekingen WHERE gebruiker_id = $user_id")->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Marsia Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include "header.php"; ?>
<main>
</main>
<?php include "footer.php"; ?>
</body>
</html>

