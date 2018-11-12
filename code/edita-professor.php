<?php include("conecta.php");
    session_start();
    $codProfessor = $_POST['codProfessor'];
    $nome = $_POST["nome"];
    $titulacao = $_POST["titulacao"];

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "professor";

  function updateProfessor($conexao, $codProfessor, $nome, $titulacao) {
    $query = "UPDATE professor SET nome = '{$nome}', titulacao = '{$titulacao}' WHERE codProfessor = '{$codProfessor}'";
    return mysqli_query($conexao, $query);
    }

    if($nome == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome');window.location.href='professor-lista.php';</script>";
    } else if($titulacao == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor escolher a sua titulação');window.location.href='professor-lista.php';</script>";  
    }

    if(updateProfessor($conexao, $codProfessor, $nome, $titulacao)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Professor editado com sucesso');window.location.href='professor-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser editado');window.location.href='professor-lista.php';</script>";
        die();
    }
?>