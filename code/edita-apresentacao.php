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

  if($tituloTrabalho == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o TCC!');window.location.href='apresentacao-lista.php';</script>";
    } else if($convidado1 == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o primeiro convidado!');window.location.href='apresentacao-lista.php';</script>";  
    } else if($convidado2 == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o segundo convidado!');window.location.href='apresentacao-lista.php';</script>";  
    }  else if($diaApresentacao == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher o dia da apresentação!');window.location.href='apresentacao-lista.php';</script>";
    }  else if($horario == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher o horário da apresentação!');window.location.href='apresentacao-lista.php';</script>";
    }

    else if(updateApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala)) {
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação editado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser editado');window.location.href='apresentacao-lista.php';</script>";
        die();
    }
?>