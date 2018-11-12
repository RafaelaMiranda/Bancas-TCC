<?php include("conecta.php");
    session_start();
    $codTrabalho = $_POST['codTrabalho'];
    $convidado1 = $_POST['convidado1'];
    $convidado2 = $_POST['convidado2'];
    $diaApresentacao = $_POST['diaApresentacao'];
    $horario = $_POST['horario'];
    $sala = $_POST['sala'];

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "trabalho";
            
  function updateApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala) {
    $query = "UPDATE trabalho SET convidado1 = '{$convidado1}', convidado2 = '{$convidado2}', diaApresentacao = '{$diaApresentacao}', horario = '{$horario}', sala = '{$sala}' WHERE codTrabalho = '{$codTrabalho}'";
    return mysqli_query($conexao, $query);
  }

    if(updateApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação editado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser editado');window.location.href='apresentacao-lista.php';</script>";
        die();
    }
?>