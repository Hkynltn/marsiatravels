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