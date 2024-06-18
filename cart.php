<?php
include "header.php";
include "connection.php";

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <title>Boekingen</title>
</head>
<body>
<section class="inleiding">
    <div id="search-bar">
        <form method="POST" action="zoek_vluchten.php">
            <p>Vertrek:</p>
            <select name="vertrek_land">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Parijs">Parijs</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Tehran">Tehran</option>
                <option value="Erbil">Erbil</option>
            </select>
            <p>Aankomst:</p>
            <select name="aankomst_land">
                <option value="Parijs">Parijs</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Tehran">Tehran</option>
                <option value="Erbil">Erbil</option>
                <option value="Cairo">Cairo</option>
            </select>
            <p>Vertrek datum:</p>
            <input type="datetime-local" name="vertrek_tijd">
            <p>Aankomst datum:</p>
            <input type="datetime-local" name="aankomst_tijd">
            <button type="submit" class="search-button-inleiding">Zoek Vluchten</button>
        </form>
    </div>
</section>
<section>
    <div id="cart-box">
        <?php
        // Haal de boekingen op uit de database
        $sql = "SELECT boeking_id, gebruiker_id, reis_id, boekingsdatum, status FROM boekingen";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                echo "<table><tr><th>Boeking ID</th><th>Gebruiker ID</th><th>Reis ID</th><th>Boekingsdatum</th><th>Status</th></tr>";
                // Output data van elke rij
                foreach ($result as $row) {
                    echo "<tr><td>" . htmlspecialchars($row["boeking_id"]) . "</td><td>" . htmlspecialchars($row["gebruiker_id"]) . "</td><td>" . htmlspecialchars($row["reis_id"]) . "</td><td>" . htmlspecialchars($row["boekingsdatum"]) . "</td><td>" . htmlspecialchars($row["status"]) . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Geen boekingen gevonden";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</section>
<a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
</body>
<?php
include "footer.php";
?>
</html>

