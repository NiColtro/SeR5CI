<?php

$data = [];

foreach ($_REQUEST["codici"] as $k => $v) {
    if ($v != "") {
        echo "Articolo #$v => " . $_REQUEST["prezzi"][$k] . "€<br>";
    }

    $data[$_REQUEST["prezzi"][$k]] = $v . " ";
}

ksort($data);

?>