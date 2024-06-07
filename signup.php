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
                <button type="submit" class="search-button-inleiding">Zoek Vluchten</button>

            </form>
        </div>
    </section>
<link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>

  
    <div class="signup-box">
      <h1>Maak account aan</h1>
      <form>
        <label>Voornaam</label>
        <input type="text" placeholder="" />
        <label>Achternaam</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Wachtwoord</label>
        <input type="password" placeholder="" />
        <label>Bevestig Wachtwoord</label>
        <input type="password" placeholder="" />
        <input type="button" value="Maak account aan" />
      </form>
    </div>
    <p class="signup-link">
      Hebt u al een account? <a href="login.php">Login hier</a>
    </p>
    <a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
  </body>
  <?php
include "footer.php";
    ?>
</html>