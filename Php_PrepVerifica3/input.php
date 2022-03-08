<h1>2 - input.php - Salvataggio + inserimento anagrafiche</h1>
<form method="get" action="calcoli.php">

    <?php
        session_start();
        $_SESSION['arrayCitta'] = $_REQUEST['citta'];

        for ($i = 0; $i < 20; $i++) {
            echo "<h5>Inserimento persona #$i</h5>";
            echo "<input type=\"text\" name=\"nomi[]\" /> <br /> <select name=\"residenze[]\">";

            foreach ($_REQUEST['citta'] as $citta) {
                echo "<option value=\"$citta\">$citta</option>";
            }

            echo "</select> <br />";
        }
    ?>

    <br />

    <button type="submit">Invia</button>
</form>