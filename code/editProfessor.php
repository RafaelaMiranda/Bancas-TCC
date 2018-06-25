<?php include('conecta.php')

    $nome = $_POST["nome"];
    $titulacao = $_POST["titulacao"];

    $query = "UPDATE Professor SET nome = '{$nome}', titulacao = '{$titulacao}'";
    return mysqli_query($conexao, $query);

?>