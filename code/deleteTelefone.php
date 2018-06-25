<?php include("conecta.php");

    $codTelefone = $_POST["codTelefone"];

    $query = "DELETE FROM Telefone WHERE codTelefone = '{$codTelefone}'";
    return mysqli_query($conexao, $query);
    
?>