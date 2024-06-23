<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = htmlspecialchars($_POST['voornaam'] ?? '');
    $achternaam = htmlspecialchars($_POST['achternaam'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $wachtwoord = htmlspecialchars($_POST['wachtwoord'] ?? '');

    $hashed_password = password_hash($wachtwoord, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord) VALUES (:voornaam, :achternaam, :email, :wachtwoord)");
        $stmt->bindParam(':voornaam', $voornaam);
        $stmt->bindParam(':achternaam', $achternaam);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':wachtwoord', $hashed_password);
        $stmt->execute();

        echo "Account successfully created!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Signup</title>
</head>
<body>
<?php
include "header.php";
include "booking-form.php";

?>
<div class="signup-box">
    <h1>Signup</h1>
    <form action="signup.php" method="POST">
        <label>Voornaam</label>
        <input type="text" name="voornaam" placeholder="Voer uw voornaam in" required />

        <label>Achternaam</label>
        <input type="text" name="achternaam" placeholder="Voer uw achternaam in" required />

        <label>Email</label>
        <input type="email" name="email" placeholder="Voer uw email in" required />

        <label>Wachtwoord</label>
        <input type="password" name="wachtwoord" placeholder="Voer uw wachtwoord in" required />

        <input type="submit" value="Signup"/>
    </form>
</div>

<?php include "footer.php"; ?>

</body>
</html>



