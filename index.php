<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <title>Marsia Travels</title>
</head>
<body>
<?php
include "header.php";
include "booking-form.php";
include "connection.php";

$sql = "SELECT beoordelingen.commentaar, beoordelingen.beoordeling, gebruikers.voornaam 
        FROM beoordelingen 
        JOIN gebruikers ON beoordelingen.gebruiker_id = gebruikers.gebruiker_id 
        ORDER BY beoordelingen.aangemaakt_op DESC 
        LIMIT 3";
$reviews = $conn->query($sql);
?>

<section>
    <h1 class="welkom">Welkom bij Marsia Travels!</h1>
    <div>
        <h2 class="beschrijving">Ben je er klaar voor? Een échte beleving? Die écht lekkere knapperige pizza uit Italië.
            Een écht avontuurlijke uitdaging. Die échte rust! Er is niets mis met pizza Hawaii op de bank.
            Maar soms is het lekker er écht even helemaal tussenuit te gaan! En daarvoor hebben wij nu
            de beste deals. Een échte ervaring, voor de beste prijs.
        </h2>
        <h2 class="beschrijving">
            Bij Marsia Travels begrijpen we dat reizen meer is dan alleen van A naar B gaan. Het gaat om
            het creëren van onvergetelijke herinneringen, het ontdekken van nieuwe culturen en het
            beleven van avonturen die je voor altijd bij zullen blijven.
        </h2>
        <h2 class="beschrijving">
            Of je nu op zoek bent naar een ontspannende strandvakantie, een avontuurlijke trektocht
            door de jungle, of een culturele verkenningstocht door historische steden, wij hebben de
            perfecte reis voor jou.
        </h2>
        <h2 class="beschrijving">
            Onze ervaren reisadviseurs staan ​​klaar om je te helpen bij het plannen van jouw droomreis.
            Met onze uitgebreide kennis van bestemmingen over de hele wereld en ons streven naar
            klanttevredenheid, zorgen we ervoor dat jouw reiservaring soepel verloopt van begin tot
            eind.
        </h2>
        <h2 class="beschrijving">
            Dus waar wacht je nog op? Grab the deal & make it real! ✈️🌎
        </h2>
        <h2 class="beschrijving">
            Boek vandaag nog jouw volgende avontuur met Marsia Travels en maak je klaar voor een
            onvergetelijke reiservaring!
        </h2>
    </div>

    <a href="trending.php" class="link"><button class="home-trending-button">Trending Bestemmingen</button></a>
    <img src="assets/img/vliegtuig.png" id="logo4">
</section>

<section>
    <div class="review-box">
        <h2>Laat een review achter:</h2>
        <form method="POST" action="verzendreview.php">
            <textarea id="review" name="commentaar" placeholder="Typen..."></textarea>
            <div class="rating">
                <span class="star" data-rating="1">★</span>
                <span class="star" data-rating="2">★</span>
                <span class="star" data-rating="3">★</span>
                <span class="star" data-rating="4">★</span>
                <span class="star" data-rating="5">★</span>
                <input type="hidden" id="rating-input" name="beoordeling" value="3">
            </div>
            <input type="submit" value="Versturen" class="verstuur-knop">
        </form>
    </div>
    <div class="top-review-box">
    <div class="top-reviews">
        <h3>"Marsia Travels was echt geweldig! De gidsen waren superaardig en wisten echt veel. Een echte aanrader!" - Anna J.</h3>
    </div>
    <div class="top-reviews">
        <h3>"Van boeken tot terugkomen, alles was top! Geen stress, alleen maar plezier. Dank je wel, Marsia Travels!" - Sarah K.</h3>
    </div>
    <div class="top-reviews">
        <h3>"Wat een top service! Alles was perfect geregeld. We gaan zeker nog eens met Marsia Travels op reis!" - Michael T.</h3>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-rating');
            document.getElementById('rating-input').value = rating;
            stars.forEach(s => {
                if (s.getAttribute('data-rating') <= rating) {
                    s.classList.add('selected');
                } else {
                    s.classList.remove('selected');
                }
            });
        });
    });
});
</script>

</body>
<?php
include "footer.php";
?>
</html>
