<h1>3 - calcoli.php - Sort + stampa</h1>
<table border=1>
    <tr>
        <th>Città</th>
        <th>Abitanti</th>
    </tr>
    <?php
        session_start();

        $classifica = [];

        foreach ($_SESSION['arrayCitta'] as $citta) {
            $counter = 0;

            foreach($_REQUEST['nomi'] as $indexResidente => $residente) {
                if ($citta == $_REQUEST['residenze'][$indexResidente] && $residente != "") {
                    $counter++;
                }
            }

            $classifica[$citta] = $counter;
        }

        arsort($classifica);

        foreach ($classifica as $nomeCitta => $numeroAbitanti) {
            echo "<tr> <td>$nomeCitta</td> <td>$numeroAbitanti</td> </tr>";
        }
    ?>

</table>