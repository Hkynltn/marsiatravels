<?php
include('connection.php');
 
try {
    $connect = new PDO($dsn, $user, $pass, $opt);
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het inlogformulier verwerken
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $password = $_POST['password'];
 
        // Query voorbereiden om gebruiker te selecteren op basis van gebruikersnaam en wachtwoord
        $stmt = $connect->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam AND password = :password");
 
        // Bind parameters en voer de query uit
        $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
 
        // Controleer of de gebruiker bestaat
        if ($stmt->rowCount() > 0) {
            // Haal de gebruikersgegevens op
            $user = $stmt->fetch();
 
            // Controleer of de gebruiker een admin is
            if ($user['admin'] == 1) {
                // Als de gebruiker een admin is, sla de gebruikersnaam op in de sessie
                $_SESSION['gebruikersnaam'] = $gebruikersnaam;
                // Stuur de admin door naar de admin-pagina
                header("Location: admin.php");
                exit();
            } else {
                // Als de gebruiker geen admin is, stuur ze terug naar de homepagina
                header("Location: index.php");
                exit();
            }
        } else {
            // Gebruiker bestaat niet of wachtwoord is onjuist
            echo "Ongeldige gebruikersnaam of wachtwoord.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>