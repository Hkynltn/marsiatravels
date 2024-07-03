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
    <form action="index.php" method="POST">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefoon">Telefoonnummer:</label><br>
        <input type="tel" id="telefoon" name="telefoon" required>

        <label for="adres">Adres:</label><br>
        <input type="text" id="adres" name="adres" required>

        <label for="besteming">Kies uw reis:</label>
        <select id="betaalwijze" name="besteming" required>
            <option value="parijs">Parijs</option>
            <option value="buenos-aires">Buenos Aires</option>
            <option value="tehran">Tehran</option>
            <option value="erbil">Erbil</option>
        </select>
        <label for="datum">Kies de datum:</label><br>
        <select id="betaalwijze" name="datum" required>
            <option value="10 juni">10 juni 2024</option>
            <option value="20 juni">20 juni 2024</option>
            <option value="30 juni">30 juni 2024</option>
        </select>
        <label for="tijd">Kies de tijd:</label><br>
        <select id="betaalwijze" name="tijd" required>
            <option value="09:00" >09:00-12:00</option>
            <option value="12:00"> 12:00-15:00</option>
            <option value="18:00">18:00-21:00</option>
        </select>

        <label for="betaalwijze">Kies uw betaalwijze:</label><br>
        <select id="betaalwijze" name="betaalwijze" required>
            <option value="creditcard">Creditcard</option>
            <option value="paypal">PayPal</option>
            <option value="ideal">iDEAL</option>
        </select>

        <a href="verwerkingboeken.php"><input type="submit" value="Boek nu"></a>
</form>
</body>
</html>
