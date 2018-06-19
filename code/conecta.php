<?php
    header('Content-Type: text/html; charset=utf-8');
    $conexao = mysqli_connect('localhost', 'root', '', 'banca');
    mysqli_set_charset($conexao, "utf8");
?>