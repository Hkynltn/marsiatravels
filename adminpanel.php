<?php
session_start();
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}

include "connection.php";

function fetchBestemmingen($conn) {
    $sql = "SELECT * FROM bestemmingen";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $naam = $_POST['naam'];
        $stmt = $conn->prepare("INSERT INTO bestemmingen (naam) VALUES (:naam)");
        $stmt->execute(['naam' => $naam]);
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $stmt = $conn->prepare("UPDATE bestemmingen SET naam = :naam WHERE id = :id");
        $stmt->execute(['naam' => $naam, 'id' => $id]);
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM bestemmingen WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    header("Location: adminpanel.php");
    exit();
}

$bestemmingen = fetchBestemmingen($conn);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Marsia Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<?php include "header.php"; ?>
<section class="inleiding">
    <?php include "inleiding.php"; ?>
</section>
<main>
    <section>
        <h2>Bestemmingen Beheren</h2>
        <form method="POST" action="adminpanel.php">
            <input type="text" name="naam" placeholder="Nieuwe bestemming toevoegen" required>
            <button type="submit" name="add">Toevoegen</button>
        </form>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Acties</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bestemmingen as $bestemming): ?>
                <tr>
                    <td><?php echo htmlspecialchars($bestemming['id']); ?></td>
                    <td><?php echo htmlspecialchars($bestemming['naam']); ?></td>
                    <td>
                        <form method="POST" action="adminpanel.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $bestemming['id']; ?>">
                            <input type="text" name="naam" value="<?php echo htmlspecialchars($bestemming['naam']); ?>" required>
                            <button type="submit" name="edit">Bewerken</button>
                        </form>
                        <form method="POST" action="adminpanel.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $bestemming['id']; ?>">
                            <button type="submit" name="delete">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>
<?php include "footer.php"; ?>
</body>
</html>
