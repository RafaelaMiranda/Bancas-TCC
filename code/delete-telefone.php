<?php include("conecta.php");
    session_start();
    $codTelefone = $_GET["codTelefone"];
    $acao = "delete";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "telefone";

  function deleteTelefone($conexao, $codTelefone) {
    $query = "DELETE FROM telefone WHERE codTelefone = '{$codTelefone}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteTelefone($conexao, $codTelefone)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Telefone deletado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser deletado');window.location.href='telefone-lista.php';</script>";
            die();
    }
?>