<?php include('conecta.php');

        $nome = $_POST["nome"];
        $titulacao = $_POST["titulacao"];
      
    function insereProfessor($conexao,$nome, $titulacao) {
        $query = "INSERT INTO Professor (nome, titulacao) VALUES ('{$nome}','{$titulacao}')";
        return mysqli_query($conexao, $query);
    }

    if($nome == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome');window.location.href='professor-formulario.php';</script>";
    } else if($titulacao == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher a sua titulação');window.location.href='professor-formulario.php';</script>";  
    }

    if(insereProfessor($conexao, $nome, $titulacao)) {
            echo"<script language='javascript' type='text/javascript'>alert('Professor adicionado com sucesso');window.location.href='professor-lista.php';</script>";
        } else { 
            echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser adicionado');window.location.href='professor-formulario.php';</script>";
            die();
        }
?>