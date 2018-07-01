<?php include("conecta.php");
    
    $tituloTrabalho = $_POST["tituloTrabalho"];
    $grupo = mysqli_query($conexao, "SELECT codGrupo FROM grupo WHERE tituloTrabalho = '{$tituloTrabalho}'");
    $row= mysqli_fetch_array($grupo);

    $codTrabalho = $row['codTrabalho'];
    $convidado1 = $_POST["convidado1"];
    $convidado2 = $_POST["convidado2"];
    $diaApresentacao = $_POST["diaApresentacao"];
    $horario = $_POST["horario"];
    $sala = $_POST["sala"];

    function insereApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala) {
        $query = "INSERT INTO Trabalho (codTrabalho, convidado1, convidado2, diaApresentacao, horario, sala ) VALUES ('{$codGrupo}','{$convidado1}','{$convidado2}','{$diaApresentacao}','{$horario}','{$sala}')";
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
  
    else if(insereApresentacao($conexao, $codTrabalho, $convidado1, $convidado2, $diaApresentacao, $horario, $sala)) {
        $codTrabalho = mysqli_fetch_row(mysqli_query($conexao, "SELECT MAX(codTrabalho) FROM Trabalho"));
        $aluno = mysqli_query($conexao, "UPDATE Aluno SET codTrabalho = '$codTrabalho[0]' WHERE codGrupo = '$codGrupo'");
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação adicionado com sucesso');window.location.href='apresentacao-lista.php';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser adicionado');window.location.href='apresentacao-formulario.php';</script>";
        die();
    }
    
?>