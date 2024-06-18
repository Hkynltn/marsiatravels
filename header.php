<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marsia Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>

    <section id="logo-box">
        <a href="index.php">
            <img src="assets/img/logoMarsiaTravels.png" id="logo">
        </a>
        
        <h1>Marsia Travels</h1>
    </section><a href=""></a>
    <div class="search-container">
        <input type="text" placeholder="Zoeken naar bestemmingen..." class="search-input" id="search-input">
        <button class="search-button" id="search-button">Zoek</button>
        <div id="search-results"></div>
    </div>
    <section>
        <?php
        if (isset($_SESSION['voornaam'])) {
            echo "<p>Hallo, " . htmlspecialchars($_SESSION['voornaam']) . "</p>";
        } else {
            echo "<a href='login.php' class='login-button'><img src='assets/img/login.png' alt='Login Button'></a>";
        }
        ?>
    </section>
    <section>
        <a href="cart.php" class="cart-button">
            <img src="assets/img/cart.png" alt="Cart">
        </a>
    </section>
</header>
<script>
    $(document).ready(function() {
        $('#search-button').on('click', function() {
            var query = $('#search-input').val();
            $.ajax({
                url: 'search.php',
                type: 'GET',
                data: { query: query },
                success: function(data) {
                    var results = JSON.parse(data);
                    var resultsHtml = '';
                    if (results.length > 0) {
                        resultsHtml = '<ul>';
                        results.forEach(function(result) {
                            resultsHtml += '<li>' + result + '</li>';
                        });
                        resultsHtml += '</ul>';
                    } else {
                        resultsHtml = '<p>Geen resultaten gevonden</p>';
                    }
                    $('#search-results').html(resultsHtml);
                }
            });
        });
    });
</script>
</body>
</html>

