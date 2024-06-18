]<?php
include "connection.php";
$host = 'localhost';
$db = 'marsia_Travels';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
 
try {
    $connect = new PDO($dsn, $user, $pass, $opt);
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het registratieformulier verwerken
        $gebruikersnaam = $_POST['gebruikersnaam'];

        $email = $_POST['email'];
        $password = $_POST['password'];
 
        // Voorbereiden van de query om SQL-injectie te voorkomen   
        $stmt = $connect->prepare("INSERT INTO gebruikers (gebruikersnaam, email, password) VALUES (:gebruikersnaam, :email, :password)");
 
        // Bind parameters en voer de query uit
        $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
 
        if ($stmt->execute()) {
            echo "Registratie succesvol!";
        } else {
            echo "Er is een fout opgetreden bij het registreren.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>