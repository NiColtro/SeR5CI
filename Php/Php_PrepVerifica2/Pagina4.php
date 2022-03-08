<table>
    <tr><th>Codice</th><th>Descrizione</th><th>Qta</th></tr>
    <?php

    $codici = $_REQUEST["codici"];
    $descrizioni = $_REQUEST["descrizioni"];
    $qta = $_REQUEST["qta"];

    foreach($codici as $idCodice => $codice) {
        if (!$qta[$idCodice] > 0)
            $qta[$idCodice] = 0;
        echo "<tr> <td>$codice</td> <td>$descrizioni[$idCodice]</td> <td>$qta[$idCodice]</td> </tr>";
    }

    ?>
</table>
</form>