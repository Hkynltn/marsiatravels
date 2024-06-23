<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeken</title>
    <?php
        include "header.php";
    ?>
</head>
<body>
    <h1>Boek uw gegevens</h1>
    <div class="boeking-container">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefoon">Telefoonnummer:</label><br>
        <input type="tel" id="telefoon" name="telefoon" required><br><br>

        <label for="adres">Adres:</label><br>
        <input type="text" id="adres" name="adres" required><br><br>

        <label for="betaalwijze">Kies uw betaalwijze:</label><br>
        <select id="betaalwijze" name="betaalwijze" required>
            <option value="creditcard">Creditcard</option>
            <option value="paypal">PayPal</option>
            <option value="ideal">iDEAL</option>
        </select><br><br>

        <a href="verwerkingboeken.php"><input type="submit" value="Boek nu"></a>
    </div>
</body>
</html>
