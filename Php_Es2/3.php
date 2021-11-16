<?php

    $iArr = $_REQUEST["nome"];
    sort($iArr);

    echo "Array ordinato:<br>";

    foreach ($iArr as $k => $v) {
        echo $k . " = " . $v . "<br>";
    }

?>