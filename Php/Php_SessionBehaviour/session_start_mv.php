<?php
header('T1: test--pre_session');
session_start();
header('T2: test--pre_content');
?>

Testo HTML-RAW dopo del session session_start();<br>

<?php

header('T3: test--pre_echo');
echo "<br>Testo HTML-PHP dopo del session session_start();";
$_SESSION['demo'] = 'Questo è un test.';
header('T4: test--post_session');

?>