<?php include("conecta.php");

    $codUsuario = $_POST['codUsuario'];
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $status = $_POST["status"];


  function updateUsuario($conexao, $codUsuario, $nome, $user, $email, $status) {
    $query = "UPDATE usuario SET codUsuario = '{$codUsuario}', nome = '{$nome}', user = '{$user}', email = '{$email}', status = '{$status}' WHERE codUsuario = '{$codUsuario}'";
    return mysqli_query($conexao, $query);
  }

  if($nome == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome!');window.location.href='usuario-lista.php';</script>";
  } else if($email == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu email!');window.location.href='usuario-lista.php';</script>";  
  } else if($user == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu user!');window.location.href='usuario-lista.php';</script>";  
  }

    if(updateUsuario($conexao, $codUsuario, $nome, $user, $email, $status)) {
        echo"<script language='javascript' type='text/javascript'>alert('Usuario editado com sucesso');window.location.href='usuario-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Usuario não pode ser editado');window.location.href='usuario-lista.php';</script>";
        die(); 
    }
?>