<?php
include('connection.php');
include "header.php";

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Signup</title>
</head>
<body>
<div class="signup-box">
    <h1>Signup</h1>
    <form action="signup_process.php" method="POST">
        <label>Naam</label>
        <input type="text" name="name" placeholder="Voer uw naam in" required />
        <label>Email</label>
        <input type="email" name="email" placeholder="Voer uw email in" required />
        <label>Wachtwoord</label>
        <input type="password" name="password" placeholder="Voer uw wachtwoord in" required />
        <input type="submit" value="Signup"/>
    </form>
</div>
<p class="login-link">
    Hebt u al een account? <a href="login.php">Log hier in</a>
</p>
<a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
</body>
<?php
include "footer.php";
?>
</html>
