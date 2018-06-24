<?php include("conecta.php");

    $nome = $_POST["nome"];
    $titulacao = $_POST["titulacao"];

    function deleteProfessor($conexao,$nome, $titulacao) {
        
        $query = "DELETE FROM Professor WHERE nome = '{$nome}'";
        return mysqli_query($conexao, $query);
    }

    if(deleteProfessor($conexao, $nome, $titulacao)) {
        echo"<script language='javascript' type='text/javascript'>alert('Professor deletado com sucesso');</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser deletado');</script>";
        die();
    }

?>