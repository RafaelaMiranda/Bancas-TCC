<?php include("conecta.php");
    session_start();
    $codGrupo = $_GET["codGrupo"];

    $id = $_SESSION['codUser'];
    $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
    $numero = mysqli_fetch_assoc($verifica);
    $nomeUsuario = $numero["nome"];

    $acao = "delete";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $nomeUsuario;
    $tabela = "grupo";

  function deleteGrupo($conexao, $codGrupo) {
    $query = "DELETE FROM grupo WHERE codGrupo = '{$codGrupo}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteGrupo($conexao, $codGrupo)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Grupo deletado com sucesso');window.location.href='grupo-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser deletado');window.location.href='grupo-lista.php';</script>";
            die();
    }
?>