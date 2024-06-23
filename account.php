<?php
session_start();
include "connection.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM gebruikers WHERE gebruiker_id = :id");
$stmt->execute(['id' => $user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $conn->prepare("SELECT * FROM boekingen WHERE gebruiker_id = :id");
$stmt->execute(['id' => $user_id]);
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <p>Voornaam: <?php echo htmlspecialchars($user['voornaam']); ?></p>
    <p>Achternaam: <?php echo htmlspecialchars($user['achternaam']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Telefoonnummer: <?php echo htmlspecialchars($user['telefoonnummer']); ?></p>
    <p>Geboortedatum: <?php echo htmlspecialchars($user['geboortedatum']); ?></p>

    <h3>Mijn Boekingen</h3>
    <?php if (count($bookings) > 0): ?>
        <ul>
            <?php foreach ($bookings as $booking): ?>
                <li>Boeking ID: <?php echo htmlspecialchars($booking['boeking_id']); ?> - Bestemming: <?php echo htmlspecialchars($booking['bestemming']); ?> - Datum: <?php echo htmlspecialchars($booking['datum']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>U heeft geen boekingen.</p>
    <?php endif; ?>
</main>
<?php include "footer.php"; ?>
</body>
</html>

