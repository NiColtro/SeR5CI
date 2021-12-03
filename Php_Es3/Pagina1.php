<?php
    // Check if number parameter is set
    if (isset($_REQUEST["numero"]))
        $n = $_REQUEST["numero"];
    else $n = 10; // Default row number
?>

<form action="#" method="get">
    <input type="number" name="numero" value="<?php echo $n; ?>"/>
    <input type="submit" value="Cambia tabella" />
</form>

<hr>

<form action="Pagina2.php" method="post">
    <table>   
        <tr>
            <th>Codice</th>
            <th>Prezzo</th>
        </tr>

        <?php
            // For every row...
            for ($i = 0; $i < $n; $i++) {
                echo "<tr><td><input type=\"number\" name=\"codici[]\"</td>";
                echo "<td><input type=\"number\" name=\"prezzi[]\"</td></tr>";
            }
        ?>

        <tr>
            <td colspan="2">
                <input type="submit" value="Invia dati" />
            </td>
        </tr>
    </table> 
</form>