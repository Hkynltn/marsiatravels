<?php
include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vertrek_land = $_POST['vertrek_land'];
    $aankomst_land = $_POST['aankomst_land'];
    $vertrek_tijd = $_POST['vertrek_tijd'];
    $aankomst_tijd = $_POST['aankomst_tijd'];

    // Opmaak van de query met prepared statements om SQL injectie te voorkomen
    $stmt = $conn->prepare("SELECT * FROM reizen WHERE bestemming = :aankomst_land AND startdatum >= :vertrek_tijd AND einddatum <= :aankomst_tijd");
    $stmt->bindParam(':aankomst_land', $aankomst_land);
    $stmt->bindParam(':vertrek_tijd', $vertrek_tijd);
    $stmt->bindParam(':aankomst_tijd', $aankomst_tijd);
    $stmt->execute();
    $reizen = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Zoekresultaten Vluchten</title>
</head>
<body>
<?php include "header.php"; ?>
<section class="inleiding">
    <h1>Zoekresultaten</h1>
    <?php if (empty($reizen)): ?>
        <p>Geen vluchten gevonden die overeenkomen met uw criteria.</p>
    <?php else: ?>
        <table>
            <thead>
            <tr>
                <th>Reis Naam</th>
                <th>Beschrijving</th>
                <th>Bestemming</th>
                <th>Startdatum</th>
                <th>Einddatum</th>
                <th>Prijs</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($reizen as $reis): ?>
                <tr>
                    <td><?php echo $reis['reis_naam']; ?></td>
                    <td><?php echo $reis['beschrijving']; ?></td>
                    <td><?php echo $reis['bestemming']; ?></td>
                    <td><?php echo $reis['startdatum']; ?></td>
                    <td><?php echo $reis['einddatum']; ?></td>
                    <td><?php echo $reis['prijs']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>
<?php include "footer.php"; ?>
</body>
</html>
