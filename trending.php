<?php include "header.php"; ?>

<body>
    <section class="inleiding">
        <div id="search-bar">
            <form method="POST" action="zoek_vluchten.php">
            </form>
        </div>
    </section>
    
    <section>
        <h1 class="welkom-trending">Trending Bestemmingen!</h1>
        <div class="container">
            <div class="bestemming">
                <a href="informatielanden.php?land=parijs" class="trending-button">
                    <img src="assets/img/parijs.png" alt="Parijs">
                    <h1>Boek vlucht naar Parijs</h1>
                </a>
            </div>
            <div class="bestemming">
                <a href="informatielanden.php?land=buenos_aires" class="trending-button">
                    <img src="assets/img/buenos_aires.png" alt="Buenos Aires">
                    <h1>Boek vlucht naar Buenos Aires</h1>
                </a>
            </div>
            <div class="bestemming">
                <a href="informatielanden.php?land=teheran" class="trending-button">
                    <img src="assets/img/teheran.png" alt="Teheran">
                    <h1>Boek vlucht naar Teheran</h1>
                </a>
            </div>
            <div class="bestemming">
                <a href="informatielanden.php?land=erbil" class="trending-button">
                    <img src="assets/img/erbil.png" alt="Erbil">
                    <h1>Boek vlucht naar Erbil</h1>
                </a>
            </div>
        </div>
        <a href="index.php" class="home-link"><button class="home-trending-button">Terug naar start-pagina</button></a>
    </section>

<?php include "footer.php"; ?>
</body>
</html>
