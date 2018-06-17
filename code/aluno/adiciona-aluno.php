<?php include("../conecta.php");
      include("../banco-tcc.php");

    $nome = $_GET["nome"];
    $ra = $_GET["ra"];
    $email = $_GET["email"];
    $tituloTrabalho = $_GET["tituloTrabalho"];
    $areaPesquisa = $_GET["areaPesquisa"];
    $curso = $_GET["curso"];
    $orientador = $_GET["orientador"];

    if(insereAluno($conexao, $ra, $tituloTrabalho, $nome, $orientador, $areaPesquisa, $curso, $email)) {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno adicionado com sucesso');window.location.href='aluno-lista.html';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser adicionado');window.location.href='aluno-formulario.html';</script>";
        die();
    }
    
?>