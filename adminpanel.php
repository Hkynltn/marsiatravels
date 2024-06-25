<?php
session_start();
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}

include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    if (isset($_POST['add'])) {
        $conn->query("INSERT INTO bestemmingen (naam) VALUES ('$naam')");
    }
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $conn->query("UPDATE bestemmingen SET naam = '$naam' WHERE id = $id");
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $conn->query("DELETE FROM bestemmingen WHERE id = $id");
    }
    header("Location: adminpanel.php");
    exit();
}

$bestemmingen = $conn->query("SELECT * FROM bestemmingen")->fetchAll();
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
<main>
    <section class="admin-panel">
        <h2>Bestemmingen Beheren</h2>
        <form method="POST" action="adminpanel.php" class="admin-form">
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
                    <td><?php echo $bestemming['id']; ?></td>
                    <td><?php echo $bestemming['naam']; ?></td>
                    <td>
                        <form method="POST" action="adminpanel.php" class="inline-form">
                            <input type="hidden" name="id" value="<?php echo $bestemming['id']; ?>">
                            <input type="text" name="naam" value="<?php echo $bestemming['naam']; ?>" required>
                            <button type="submit" name="edit">Bewerken</button>
                        </form>
                        <form method="POST" action="adminpanel.php" class="inline-form">
                            <input type="hidden" name="id" value="<?php echo $bestemming['id']; ?>">
                            <button type="submit" name="delete">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </body>
        </table>
    </section>
</main>
<?php include "footer.php"; ?>
</body>
</html>

