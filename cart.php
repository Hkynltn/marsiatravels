<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Boekingen</title>
</head>
<body>
<?php
include "header.php";
include "booking-form.php";
?>
<section class="cart-section">
    <div id="cart-box">
        <h2>Uw Boekingen</h2>
        <?php
        $sql = "SELECT boeking_id, gebruiker_id, reis_id, boekingsdatum, status FROM boekingen WHERE gebruiker_id = :gebruiker_id";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':gebruiker_id', $_SESSION['gebruiker_id']);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                echo "<table><tr><th>Boeking ID</th><th>Reis ID</th><th>Boekingsdatum</th><th>Status</th></tr>";
                // Output data van elke rij
                foreach ($result as $row) {
                    echo "<tr><td>" . htmlspecialchars($row["boeking_id"]) . "</td><td>" . htmlspecialchars($row["reis_id"]) . "</td><td>" . htmlspecialchars($row["boekingsdatum"]) . "</td><td>" . htmlspecialchars($row["status"]) . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Geen boekingen gevonden.</p>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</section>
<section class="game-section">
    <div id="game-box">
        <p>Score: <span id="score">0</span></p>
        <div id="bunny-container">
            <img src="assets/img/bunny.png" id="bunny" alt="Bunny">
        </div>
    </div>
</section>
<a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
<?php include "footer.php"; ?>
<script src="assets/js/game.js"></script>
</body>
</html>
