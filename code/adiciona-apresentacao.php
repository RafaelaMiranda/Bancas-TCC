<?php include("conecta.php");
    session_start();
    $tituloTrabalho = $_POST["tituloTrabalho"];
    $grupo = mysqli_query($conexao, "SELECT codGrupo FROM grupo WHERE tituloTrabalho = '{$tituloTrabalho}'");
    $row = mysqli_fetch_array($grupo);

    $codGrupo = $row['codGrupo'];
    $convidado1 = $_POST["convidado1"];
    $convidado2 = $_POST["convidado2"];
    $diaApresentacao = $_POST["diaApresentacao"];
    $horario = $_POST["horario"];
    $sala = $_POST["sala"];

    $acao = "insert";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "trabalho";

    function insereApresentacao($conexao, $codGrupo, $convidado1, $convidado2, $diaApresentacao, $horario, $sala) {
        $query = "INSERT INTO trabalho (codGrupo, convidado1, convidado2, diaApresentacao, horario, sala ) VALUES ('{$codGrupo}', '{$convidado1}','{$convidado2}','{$diaApresentacao}','{$horario}','{$sala}')";
        return mysqli_query($conexao, $query);
    }

    if($tituloTrabalho == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o TCC!');window.location.href='apresentacao-formulario.php';</script>";
    } else if($convidado1 == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o primeiro convidado!');window.location.href='apresentacao-formulario.php';</script>";  
    } else if($convidado2 == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o segundo convidado!');window.location.href='apresentacao-formulario.php';</script>";  
    }  else if($diaApresentacao == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher o dia da apresentação!');window.location.href='apresentacao-formulario.php';</script>";
    }  else if($horario == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher o horário da apresentação!');window.location.href='apresentacao-formulario.php';</script>";
    }
  
    else if(insereApresentacao($conexao, $codGrupo, $convidado1, $convidado2, $diaApresentacao, $horario, $sala)) {
        $codTrabalho = mysqli_fetch_row(mysqli_query($conexao, "SELECT MAX(codTrabalho) FROM trabalho"));
        $aluno = mysqli_query($conexao, "UPDATE Aluno SET codTrabalho = '$codTrabalho[0]' WHERE codGrupo = '$codGrupo'");
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação adicionado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser adicionado');window.location.href='apresentacao-formulario.php';</script>";
        die();
    }
    
?>