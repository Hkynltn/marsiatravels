<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marsia Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/search.css"> <!-- Nieuwe CSS -->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/search.js"></script> <!-- Nieuwe JavaScript -->
</head>
<body>
<header>
    <section id="logo-box">
        <a href="index.php">
            <img src="assets/img/logoMarsiaTravels.png" id="logo">
        </a>
        <h1>Marsia Travels</h1>
    </section>
    <div class="search-container">
        <input type="text" placeholder="Zoeken naar bestemmingen..." class="search-input" id="search-input">
        <button class="search-button" id="search-button">Zoek</button>
        <div id="search-results"></div>
    </div>
    <div id="contact-us">
        <a href="contact.php"><img src="assets/img/contact.png" id="contact2"></a>
    </div>
    <section>
        <?php
        if (isset($_SESSION['voornaam'])) {
            echo "<p>Hallo, " . htmlspecialchars($_SESSION['voornaam']) . "</p>";
        } else {
            echo "<a href='login.php' class='login-button'><img src='assets/img/login.png' alt='Login Button'></a>";
        }
        ?>
    </section>
    <section>
        <a href="cart.php" class="cart-button">
            <img src="assets/img/cart.png" alt="Cart">
        </a>
    </section>
</header>
</body>
</html>

