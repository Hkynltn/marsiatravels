<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neem Contact Op</title>

</head>
<body>
    <div class="contact-veld">
        <h1>Neem Contact Op</h1>
        <form action="verzend_contact.php" method="POST">
            <div class="invoer-sectie">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
            </div>
            <div class="invoer-sectie">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="invoer-sectie">
                <label for="bericht">Bericht:</label>
                <textarea id="bericht" name="bericht" rows="5" required></textarea>
            </div>
            <a href="verzendencontact.php" class="verzend-knop">Verzenden</a>

        </form>
    </div>
</body>
</html>
