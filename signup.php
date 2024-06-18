<?php
include "signup-script.php";
include "header.php";
include('connection.php');

$host = 'localhost';
$dbname = 'marsia_travels';
$username = 'root';
$password = 'Little1314107';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['gebruikersnaam'];
    $email = $_POST['email'];
    $password = $_POST['wachtwoord'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $error_message = "Username already in use. Please choose another one.";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :passwordHash)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passwordHash', $passwordHash);
        $stmt->execute();

        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/signup.css">
    <title>Registratie</title>
</head>
<body>

<div class="signup-box">
    <h1>Maak account aan</h1>
    <form method="POST" action="signup.php">
        <label>Voornaam</label>
        <input type="text" name="voornaam" required />
        <label>Achternaam</label>
        <input type="text" name="achternaam" required />
        <label>Email</label>
        <input type="email" name="email" required />
        <label>Wachtwoord</label>
        <input type="password" name="wachtwoord" required />
        <label>Bevestig Wachtwoord</label>

        <input type="password" name="bevestig_wachtwoord" required />
        <input type="submit" value="Maak account aan" />
    </form>
</div>
<p class="signup-link">
    Hebt u al een account? <a href="login.php">Login hier</a>
</p>
<a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
<?php include "footer.php"; ?>
</body>
</html>

