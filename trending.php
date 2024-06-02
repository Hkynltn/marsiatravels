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
    <h1 class="welkom-trending">Trending Bestemmingen!</h1>
    <div class="container">
        <div class="bestemming">
            <img src="assets/img/parijs.png" alt="Parijs">
            <a href="#" class="trending-button"><h1>Boek vlucht naar Parijs</h1></a>
        </div>
        <div class="bestemming">
            <img src="assets/img/buenos_aires.png" alt="Buenos Aires">
            <a href="#" class="trending-button"><h1>Boek vlucht naar Buenos Aires</h1></a>
        </div>
        <div class="bestemming">
            <img src="assets/img/teheran.png" alt="Teheran">
            <a href="#" class="trending-button"><h1> Boek vlucht naar Teheran </h1></a>
        </div>
        <div class="bestemming">
            <img src="assets/img/erbil.png" alt="Erbil">
            <a href="#" class="trending-button"><h1>Boek vlucht naar Erbil</h1></a>
        </div>
    </div>
    <a href="index.php" class="home-link"><button class="home-trending-button">Terug naar start-pagina</button></a>
    </section>
</body>
<?php
include "footer.php";
    ?>
</html>