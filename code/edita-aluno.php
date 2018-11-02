<?php include("conecta.php");

    $ra = $_POST['ra'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];


  function updateAluno($conexao, $ra, $nome, $email, $curso) {
    $query = "UPDATE aluno SET ra = '{$ra}', nome = '{$nome}', email = '{$email}', curso = '{$curso}' WHERE ra = '{$ra}'";
    return mysqli_query($conexao, $query);
  }

  if($nome == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome!');window.location.href='aluno-lista.php';</script>";
  } else if($email == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu email!');window.location.href='aluno-lista.php';</script>";  
  } else if($curso == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar seu curso!');window.location.href='aluno-lista.php';</script>";  
  }

    if(updateAluno($conexao, $ra, $nome, $email, $curso)) {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno editado com sucesso');window.location.href='aluno-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser editado');window.location.href='aluno-lista.php';</script>";
        die(); 
    }
?>