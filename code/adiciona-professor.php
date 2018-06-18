<?php include("conecta.php");

    $nome = $_POST["nome"];
    $titulacao = $_POST["titulacao"];

    function insereProfessor($conexao,$nome, $titulacao) {
        
        $query = "INSERT INTO Professor (nome, titulacao) VALUES ('{$nome}','{$titulacao}')";
        return mysqli_query($conexao, $query);
    }

    if(insereProfessor($conexao, $nome, $titulacao)) {
        echo"<script language='javascript' type='text/javascript'>alert('Professor adicionado com sucesso');window.location.href='professor-lista.html';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser adicionado');window.location.href='professor-formulario.html';</script>";
        die();
    }

?>