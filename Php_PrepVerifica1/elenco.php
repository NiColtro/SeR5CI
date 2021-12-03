<table border=1>
<tr><th>Matricola</th><th>Voto</th></tr>

<?php
    $matricole = $_REQUEST["matricole"]; // Array con Matricole
    $voti = $_REQUEST["voti"]; // Array con Voti
    $url = "numeroVoti.php?";

    arsort($voti); // Ordino l'array in base al valore

    foreach ($voti as $idVoto => $voto) // Itero in array di voti
        if ($matricole[$idVoto] != "") { // Controllo che non sia vuota (cella Matricola lasciata libera)
            echo "<tr><td>" . $matricole[$idVoto] . "</td><td>$voto</td></tr>"; // Stampo riga della tabella "Matricola: Voto"
            $url .= "&matricole[]=" . $matricole[$idVoto] . "&voti[]=" . $voto; // Aggiungo riga alla URL
        }

    echo "</table><br><a href=\"$url\">Numero Voti</a>"; // Link alla pagina conta voti + chiudo tabella!
?>