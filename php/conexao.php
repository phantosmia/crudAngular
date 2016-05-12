<?php
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

mysqli_close($link);
?>
