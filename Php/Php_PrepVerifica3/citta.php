<h1>1 - citta.php - Inserimento nomi di città</h1>
<form method="get" action="input.php">
    <?php
        for ($i = 0; $i < 6; $i++) {
            echo "<input type=\"text\" name=\"citta[]\" /> <br />";
        }
    ?>

    <br />

    <button type="submit">Invia</button>
</form>