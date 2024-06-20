<?php
include "connection.php";
include "header.php";
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
            <p class="best1"></p>
            <p class="best2"></p>
            <p class="best3"></p>
            <button type="submit" class="search-button-inleiding">Zoek Vluchten</button>
        </form>
    </div>
</section>
<div class="login-box">
    <h1>Login</h1>
    <form action="login-script.php" method="POST">
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
</body>
<?php
include "footer.php";
?>
</html>


