<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeken</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <section>
        <h1>Boekingsbevestiging</h1>
        <p>Welkom <?php echo htmlspecialchars($_POST["naam"]); ?></p>
        <p>Email: <?php echo htmlspecialchars($_POST["email"]); ?></p>
        <p>Telefoon: <?php echo htmlspecialchars($_POST["telefoon"]); ?></p>
        <p>Adres: <?php echo htmlspecialchars($_POST["adres"]); ?></p>
        <p>Bestemming: <?php echo htmlspecialchars($_POST["besteming"]); ?></p>
        <p>Datum: <?php echo htmlspecialchars($_POST["datum"]); ?></p>
        <p>Tijd: <?php echo htmlspecialchars($_POST["tijd"]); ?></p>
        <p>Betaalwijze: <?php echo htmlspecialchars($_POST["betaalwijze"]); ?></p>
    </section>
</body>
</html>
