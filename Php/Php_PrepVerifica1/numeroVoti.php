<table border=1>
<tr><th>Matricola</th><th>Numero voti</th></tr>

<?php
    $matricole = $_REQUEST["matricole"]; // Array con Matricole
    $voti = $_REQUEST["voti"]; // Array con Voti

    asort($matricole); // Ordino l'array in base al valore

    foreach(array_count_values($matricole) as $matricola => $numOccorrenze) { // Per ogni cella del counter (Matricola => NumeroOccorrenze)
        echo "<tr><td>$matricola</td><td>$numOccorrenze</td></tr>";
    }
?>