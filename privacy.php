    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Privacybeleid van Marisa Travels</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    
        
        <div class="content">
            <h1>Privacybeleid van Marsia Travels</h1>
            
            
            <h2>Welke informatie verzamelen we?</h2>
            <ul>
                <li>Persoonlijke informatie: Naam, adres, e-mailadres, telefoonnummer, paspoortgegevens, en andere gegevens die je verstrekt bij het boeken van reizen of het aanvragen van informatie.</li>
                <li>Betaling gegevens: Creditcardinformatie of andere betalingsgegevens die nodig zijn voor het verwerken van betalingen voor geboekte reizen.</li>
                <li>Automatisch verzamelde informatie: IP-adressen, browserinformatie, cookiegegevens en andere technologieën die worden gebruikt om trends te analyseren, de site te beheren, de bewegingen van gebruikers rond de site te volgen en demografische informatie te verzamelen.</li>
            </ul>
            
            <h2>Hoe gebruiken we deze informatie?</h2>
            <ul>
                <li>Om je reisboekingen te verwerken en te beheren.</li>
                <li>Om contact met je op te nemen over je boekingen en om je van dienst te zijn.</li>
                <li>Voor interne administratie, facturering en boekhouding.</li>
                <li>Om onze website en diensten te verbeteren.</li>
                <li>Voor marketingdoeleinden, mits je daarvoor toestemming hebt gegeven.</li>
            </ul>
            
            
            <form onsubmit="return validateForm()">
    <input type="checkbox" id="agreeCheckbox">
    <label for="agreeCheckbox">By ticking this box, I agree that I have read the privacy policy.</label>
    <br>
    <a href="index.php"><button class="submit">Verzenden</button></a>
</form>

<script>
    function validateForm() {
        var checkbox = document.getElementById('agreeCheckbox');
        if (!checkbox.checked) {
            alert('Je moet akkoord gaan met de privacy policy.');
            return false;
        }
        return true;
    }
</script>

            

        
    </body>
    </html>
