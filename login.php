<?php
include "header.php";
    ?>
<body>
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
    <p class="para-2">
      Hebt u al een account? <a href="login.php">Login hier</a>
    </p>
    <a href="index.php" class="home-link"><button class="home-login-button">Terug naar start-pagina</button></a>
  </body>
  <?php
include "footer.php";
    ?>
</html>