<?php include("conecta.php");

    $ra = $_POST["ra"];

    $query = "DELETE FROM Aluno WHERE ra = '{$ra}'";
    return mysqli_query($conexao, $query);

?>