<form action="Pagina4.php">
<table>
    <tr><th>Codice</th><th>Descrizione</th><th>Qta</th></tr>
    <?php

    $codici = $_REQUEST["codici"];
    $descrizioni = $_REQUEST["descrizioni"];
    $qta = $_REQUEST["qta"];

    if (isset($_REQUEST["inc"]))
        $qta[$_REQUEST["inc"]] += 1;

    $url = "?";

    foreach($codici as $idCodice => $codice)
        $url .= "&codici[]=" . $codice . "&descrizioni[]=" . $descrizioni[$idCodice] . "&qta[]=" . $qta[$idCodice];

    foreach($codici as $idCodice => $codice) {
        if (!$qta[$idCodice] > 0)
            $qta[$idCodice] = 0;
        echo "<tr> <td>$codice</td> <td><a href=\"Pagina3.php$url&inc=$idCodice\">$descrizioni[$idCodice]</a></td> <td><input type=\"number\" value=\"$qta[$idCodice]\" name=\"qta[]\" disabled /></td> </tr>";
    }

    echo "</table><a href=\"Pagina4.php$url\">Visualizza carrello</a>";
    ?>
</form>