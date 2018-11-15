<?php include("conecta.php");
    session_start();
    $codUsuario = $_POST['codUsuario'];
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $nivel = $_POST["nivel"];

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $usuario = $_SESSION['codUser'];
    $tabela = "usuario";


  function updateUsuario($conexao, $codUsuario, $nome, $user, $email, $status, $nivel) {
    $query = "UPDATE usuario SET codUsuario = '{$codUsuario}', nome = '{$nome}', user = '{$user}', email = '{$email}', status = '{$status}', nivel = '{$nivel}' WHERE codUsuario = '{$codUsuario}'";
    return mysqli_query($conexao, $query);
  }

  if($nome == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome!');window.location.href='usuario-lista.php';</script>";
  } else if($email == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu email!');window.location.href='usuario-lista.php';</script>";  
  } else if($user == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu user!');window.location.href='usuario-lista.php';</script>";  
  }

  if(updateUsuario($conexao, $codUsuario, $nome, $user, $email, $status, $nivel)) {
    $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$usuario}', '{$tabela}')");
    echo"<script language='javascript' type='text/javascript'>alert('Usuario editado com sucesso');window.location.href='usuario-lista.php';</script>";
  } else { 
    echo"<script language='javascript' type='text/javascript'>alert('Usuario não pode ser editado');window.location.href='usuario-lista.php';</script>";
    die(); 
  }
?>