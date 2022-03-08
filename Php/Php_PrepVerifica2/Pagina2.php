<form action="Pagina3.php">
<table>
    <tr><th>Codice</th><th>Descrizione</th></tr>
    <?php

    $n = $_REQUEST["n"];
    for (; $n > 0; $n--) {
        echo "<tr> <td><input type=\"text\" name=\"codici[]\" /></td> <td><input type=\"text\" name=\"descrizioni[]\" /></td> </tr>";
    }

    ?>
</table>
<button type="submit">Visualizza tabella</button>
</form>