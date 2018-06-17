<?php include("../conecta.php");
      include("../banco-tcc.php");

    $nome = $_GET["nome"];
    $titulacao = $_GET["titulacao"];

    if(insereProfessor($conexao, $nome, $titulacao)) {
        echo"<script language='javascript' type='text/javascript'>alert('Professor adicionado com sucesso');window.location.href='professor-lista.html';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser adicionado');window.location.href='professor-formulario.html';</script>";
        die();
    }

?>