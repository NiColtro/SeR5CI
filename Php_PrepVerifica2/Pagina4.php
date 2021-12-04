<table>
    <tr><th>Codice</th><th>Descrizione</th><th>Qta</th></tr>
    <?php

    $codici = $_REQUEST["codici"];
    $descrizioni = $_REQUEST["descrizioni"];
    $qta = $_REQUEST["qta"];

    foreach($codici as $idCodice => $codice)
        echo "<tr> <td>$codice</td> <td>$descrizioni[$idCodice]</td> <td>$qta[$idCodice]</td> </tr>";

    ?>
</table>
</form>