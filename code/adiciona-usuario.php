<?php include('conecta.php');

    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $status = 1;

    function insereUsuario($conexao, $nome, $user, $email, $senha, $status) {
        $query = "INSERT INTO usuario (nome, user, email, senha, status) VALUES ('{$nome}','{$user}','{$email}',md5('{$senha}'), '{$status}')";
        return mysqli_query($conexao, $query);
    }

    if($nome == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome!');window.location.href='aluno-formulario.php';</script>";
    } else if($user == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu user!');window.location.href='aluno-formulario.php';</script>";  
    }
    else if($email == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu e-mail!');window.location.href='aluno-formulario.php';</script>";  
    } else if($senha == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir sua senha!');window.location.href='aluno-formulario.php';</script>";  
    } 
    
    else if(insereUsuario($conexao, $nome, $user, $email, $senha, $status)) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuario adicionado com sucesso');window.location.href='usuario-lista.php';</script>";
        } else { 
            echo"<script language='javascript' type='text/javascript'>alert('Usuario não pode ser adicionado');window.location.href='usuario-formulario.php';</script>";
            die();
        }
?>