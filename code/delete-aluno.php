<?php include("conecta.php");
    session_start();
    $ra = $_GET["ra"];

    $acao = "delete";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "aluno";

  function deleteAluno($conexao, $ra) {
    $query = "DELETE FROM aluno WHERE ra = '{$ra}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteAluno($conexao, $ra)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Aluno deletado com sucesso');window.location.href='aluno-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser deletado');window.location.href='aluno-lista.php';</script>";
            die();
    }
?>