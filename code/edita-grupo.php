<?php include("conecta.php");
    session_start();
    $codGrupo = $_POST['codGrupo'];
    $tituloTrabalho = $_POST['tituloTrabalho'];
    $orientador = $_POST['orientador'];
    $areaPesquisa = $_POST['areaPesquisa'];
    $alunoA = $_POST['alunoA'];
    $alunoB = $_POST['alunoB'];
    $alunoC = $_POST['alunoC'];
    $alunoD = $_POST['alunoD'];

    $id = $_SESSION['codUser'];
    $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
    $numero = mysqli_fetch_assoc($verifica);
    $nomeUsuario = $numero["nome"];

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $nomeUsuario;
    $tabela = "grupo";
            
  function updateGrupo($conexao, $codGrupo, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD ) {
    $query = "UPDATE grupo SET tituloTrabalho = '{$tituloTrabalho}', orientador = '{$orientador}', areaPesquisa = '{$areaPesquisa}', alunoA = '{$alunoA}', alunoB = '{$alunoB}', alunoC = '{$alunoC}', alunoD = '{$alunoD}' WHERE codGrupo = '{$codGrupo}'";
    return mysqli_query($conexao, $query);
  }

  if($tituloTrabalho == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o título do trabalho!');window.location.href='grupo-lista.php';</script>";
    } else if($orientador == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o orientador!');window.location.href='grupo-lista.php';</script>";  
    } else if($areaPesquisa == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preencher a areá de pesquisa!');window.location.href='grupo-lista.php';</script>";  
    }  else if($alunoA == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o(s) Aluno(s)!');window.location.href='grupo-lista.php';</script>";
    }

   else if(updateGrupo($conexao, $codGrupo, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD )) {
        $codGrupo = mysqli_fetch_row(mysqli_query($conexao,"SELECT MAX(codGrupo) FROM Grupo"));
        $aluno = mysqli_query($conexao, "UPDATE Aluno SET codGrupo = '$codGrupo[0]' WHERE nome = '$alunoA' OR nome = '$alunoB' OR nome = '$alunoC' OR nome = '$alunoD'");
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Grupo editado com sucesso');window.location.href='grupo-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser editado');window.location.href='grupo-lista.php';</script>";
        die();
    }
?>