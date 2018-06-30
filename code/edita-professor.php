<?php include("conecta.php");

    $codProfessor = $_POST['codProfessor'];
    $nome = $_POST["nome"];
    $titulacao = $_POST["titulacao"];


  function updateProfessor($conexao, $codProfessor, $nome, $titulacao) {
    $query = "UPDATE Professor SET nome = '{$nome}', titulacao = '{$titulacao}' WHERE codProfessor = '{$codProfessor}'";
    return mysqli_query($conexao, $query);
  }

    if(updateProfessor($conexao, $codProfessor, $nome, $titulacao)) {
        echo"<script language='javascript' type='text/javascript'>alert('Professor editado com sucesso');window.location.href='professor-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser editado');window.location.href='professor-lista.php';</script>";
        die();
    }
?>