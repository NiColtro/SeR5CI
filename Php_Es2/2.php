<html>

<form action="3.php" method="post">

    <?php

        $numBox = $_REQUEST["numBox"];

        for ($i = 0; $i < $numBox; $i++) {
            echo "<input type=\"text\" name=\"nome[]\" placeholder=\"Campo n. " . $i . "\"> <br>";
        }

    ?>
    
    <button type="submit">Invia</button>
</form>

</html>