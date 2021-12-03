<form action="elenco.php">
<table>
    <tr><th>Matricola</th><th>Voto</th></tr>

    <?php
        $options = ''; // Stringa con voti 1 => 10
        for($i = 1; $i < 11; $i++) // Genero opzioni per il select (range 1, 10)
            $options .= "<option value='$i'>$i</option>";

        $row = "
            <tr>
                <td><input type=\"text\" name=\"matricole[]\"></td>
                <td><select name=\"voti[]\">
                    $options
                </select></td>
            </tr>
        "; // Genero stringa di ogni riga

        for($i = 0; $i < 20; $i++) // Per N studenti stampo la riga
            echo $row;
    ?>
</table>
<button type="submit">Elenco</button>
</form>