<?php include("conecta.php");
    session_start();
    $codProfessor = $_GET["codProfessor"];

    $acao = "delete";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "professor";

  function deleteProfessor($conexao, $codProfessor) {
    $query = "DELETE FROM professor WHERE codProfessor = '{$codProfessor}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteProfessor($conexao, $codProfessor)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Professor deletado com sucesso');window.location.href='professor-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser deletado');window.location.href='professor-lista.php';</script>";
            die();
    }
?>