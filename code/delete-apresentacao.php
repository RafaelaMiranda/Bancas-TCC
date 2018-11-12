<?php include("conecta.php");
    session_start();
    $codTrabalho = $_GET["codTrabalho"];

    $acao = "delete";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "trabalho";

  function deleteApresentacao($conexao, $codTrabalho) {
    $query = "DELETE FROM trabalho WHERE codTrabalho = '{$codTrabalho}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteApresentacao($conexao, $codTrabalho)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação deletado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser deletado');window.location.href='apresentacao-lista.php';</script>";
        die();
    }
?>