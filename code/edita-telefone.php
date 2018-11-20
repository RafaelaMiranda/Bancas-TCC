<?php include("conecta.php");
    session_start();
    $codTelefone = $_POST['codTelefone'];
    $numero = $_POST["numero"];
    $ra = $_POST["ra"];
    $tipo = $_POST["tipo"];

    $id = $_SESSION['codUser'];
    $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
    $numero2 = mysqli_fetch_assoc($verifica);
    $nomeUsuario = $numero2["nome"];

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $nomeUsuario;
    $tabela = "telefone";

  function updateTelefone($conexao, $codTelefone, $numero, $ra, $tipo) {
    $query = "UPDATE telefone SET numero = '{$numero}', ra = '{$ra}', tipo = '{$tipo}' WHERE codTelefone = '{$codTelefone}'";
    return mysqli_query($conexao, $query);
  }

  if($numero == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o numero do telefone!');window.location.href='telefone-lista.php';</script>";
  } else if($tipo == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o tipo!');window.location.href='telefone-lista.php';</script>";  
  } 

 if(updateTelefone($conexao, $codTelefone, $numero, $ra, $tipo)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Telefone editado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser editado');window.location.href='telefone-lista.php';</script>";
        die();
    }
?>