<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $telefoon = htmlspecialchars($_POST['telefoon']);
    $adres = htmlspecialchars($_POST['adres']);
    $betaalwijze = htmlspecialchars($_POST['betaalwijze']);

    // Hier kun je de gegevens verwerken en opslaan in een database of een e-mail versturen
    // Voor dit voorbeeld gaan we simpelweg de gegevens weergeven op een bevestigingspagina

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Bevestiging</title>
    </head>
    <body>
        <h1>Bedankt voor uw boeking!</h1>
        <p>Naam: $naam</p>
        <p>E-mail: $email</p>
        <p>Telefoonnummer: $telefoon</p>
        <p>Adres: $adres</p>
        <p>Betaalwijze: $betaalwijze</p>
    </body>
    </html>";
} else {
    echo "Ongeldige aanvraag.";
}

<script>
function verzendGegevens() {
    // Verzamelt de gegevens
    var naam = document.getElementById('naam').value;
    var email = document.getElementById('email').value;
    var telefoon = document.getElementById('telefoon').value;
    var adres = document.getElementById('adres').value;
    var betaalwijze = document.getElementById('betaalwijze').value;

    // Stuurt de gegevens naar de server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "verwerk_boeking.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert("Boeking succesvol!");
        }
    };
    xhr.send("naam=" + encodeURIComponent(naam) +
             "&email=" + encodeURIComponent(email) +
             "&telefoon=" + encodeURIComponent(telefoon) +
             "&adres=" + encodeURIComponent(adres) +
             "&betaalwijze=" + encodeURIComponent(betaalwijze));
}
</script>
?>
