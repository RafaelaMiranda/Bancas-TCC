<?php include("conecta.php");

    $codTrabalho = $_POST['codTrabalho'];
    $convidado1 = $_POST['convidado1'];
    $convidado2 = $_POST['convidado2'];
    $diaApresentacao = $_POST['diaApresentacao'];
    $horario = $_POST['horario'];
    $sala = $_POST['sala'];
            
  function updateApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala) {
    $query = "UPDATE Trabalho SET convidado1 = '{$convidado1}', convidado2 = '{$convidado2}', diaApresentacao = '{$diaApresentacao}', horario = '{$horario}', sala = '{$sala}' WHERE codTrabalho = '{$codTrabalho}'";
    return mysqli_query($conexao, $query);
  }

    if(updateApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala)) {
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação editado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser editado');window.location.href='apresentacao-lista.php';</script>";
        die();
    }
?>