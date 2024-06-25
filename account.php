<?php
session_start();
include "connection.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$user = $conn->query("SELECT * FROM gebruikers WHERE gebruiker_id = $user_id")->fetch(PDO::FETCH_ASSOC);
$bookings = $conn->query("SELECT * FROM boekingen WHERE gebruiker_id = $user_id")->fetchAll(PDO::FETCH_ASSOC);
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
    <h2>Mijn Account</h2>
    <h3>Gegevens</h3>
    <p>Voornaam: <?php echo $user['voornaam']; ?></p>
    <p>Achternaam: <?php echo $user['achternaam']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Telefoonnummer: <?php echo $user['telefoonnummer']; ?></p>
    <p>Geboortedatum: <?php echo $user['geboortedatum']; ?></p>

    <h3>Mijn Boekingen</h3>
    <?php if (count($bookings) > 0): ?>
        <ul>
            <?php foreach ($bookings as $booking): ?>
                <li>Boeking ID: <?php echo $booking['boeking_id']; ?> - Bestemming: <?php echo $booking['bestemming']; ?> - Datum: <?php echo $booking['datum']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>U heeft geen boekingen.</p>
    <?php endif; ?>
</main>
<?php include "footer.php"; ?>
</body>
</html>

