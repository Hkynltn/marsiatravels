<?php
include "header.php";
    ?>
    <body>

    <section class="inleiding">
        <div id="search-bar">
            <form method="POST" action="zoek_vluchten.php">
                <p>Vertrek:</p>
                <select name="vertrek_land">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Parijs">Parijs</option>
                    <option value="Buenos Aires">Buenos Aires</option>
                    <option value="Tehran">Tehran</option>
                    <option value="Erbil">Erbil</option>
                </select>
                <p>Aankomst:</p>
                <select name="aankomst_land">
                    <option value="Parijs">Parijs</option>
                    <option value="Buenos Aires">Buenos Aires</option>
                    <option value="Tehran">Tehran</option>
                    <option value="Erbil">Erbil</option>
                    <option value="Cairo">Cairo</option>
                </select>
                <p>Vertrek datum:</p>
                <input type="datetime-local" name="vertrek_tijd">
                <p>Aankomst datum:</p>
                <input type="datetime-local" name="aankomst_tijd">
                <p class="best1"></p>
                <p class="best2"></p>
                <p class="best3"></p>
                <button type="submit" class="search-button">Zoek Vluchten</button>

            </form>
        </div>
    </section>



        <section>
            <h1 class="welkom">Welkom bij Marsia Travels!</h1>
            <h2 class="beschrijving">Ben je er klaar voor? Een échte beleving? Die écht lekkere knapperige pizza uit Italië.
                 Een écht avontuurlijke uitdaging. Die échte rust! Er is niets mis met pizza Hawaii op de bank.
                 Maar soms is het lekker er écht even helemaal tussenuit te gaan! En daarvoor hebben wij nu
                 de beste deals. Een échte ervaring, voor de beste prijs. 
                 Bij Marsia Travels begrijpen we dat reizen meer is dan alleen van A naar B gaan. Het gaat om
                 het creëren van onvergetelijke herinneringen, het ontdekken van nieuwe culturen en het
                 beleven van avonturen die je voor altijd bij zullen blijven.
                
                 Of je nu op zoek bent naar een ontspannende strandvakantie, een avontuurlijke trektocht
                 door de jungle, of een culturele verkenningstocht door historische steden, wij hebben de
                 perfecte reis voor jou.
                
                 Onze ervaren reisadviseurs staan ​​klaar om je te helpen bij het plannen van jouw droomreis.
                 Met onze uitgebreide kennis van bestemmingen over de hele wereld en ons streven naar
                 klanttevredenheid, zorgen we ervoor dat jouw reiservaring soepel verloopt van begin tot
                 eind.
                 Dus waar wacht je nog op? Grab the deal & make it real! ✈️🌎

                 Boek vandaag nog jouw volgende avontuur met Marsia Travels en maak je klaar voor een
                 onvergetelijke reiservaring! 
               </h2>
               
               <a href="trending.php" class="link"><button class="home-trending-button">Trending Bestemmingen</button></a>
                 <img src="assets/img/vliegtuig.png" id="logo4">
        </section>
        <section>
        <div class= review-box>
                <h2> Laat een review achter:</h2>
                <input type="text" id="review" name="review" placeholder="  Typen..." />
                <input type="submit" value="versturen" class="verstuur-knop" />
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
</div>
</section>
</body>
<?php
include "footer.php";
    ?>
</html>