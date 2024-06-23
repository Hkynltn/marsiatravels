<?php
include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['wachtwoord'])) {
        $_SESSION['email'] = $email;
        $_SESSION['voornaam'] = $user['voornaam'];
        $_SESSION['gebruiker_id'] = $user['gebruiker_id'];

        var_dump($_SESSION);

        header("Location: account.php");
        exit();
    } else {
        $_SESSION['error'] = "Ongeldige email of wachtwoord";
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
    <title>Login</title>
</head>
<body>
<?php
include "header.php";
include "booking-form.php";

?>
<div class="login-box">
    <h1>Login</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <p class="error-message"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="Voer uw email in" required />
        <label>Wachtwoord</label>
        <input type="password" name="password" placeholder="Voer uw wachtwoord in" required />
        <input type="submit" value="Login"/>
    </form>
</div>
<p class="signup-link">
    Hebt u nog geen account? <a href="signup.php">Maak hier een account aan</a>
</p>
<a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
<?php include "footer.php"; ?>
</body>
</html>

