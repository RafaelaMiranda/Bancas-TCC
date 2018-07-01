<?php include('conecta.php');

    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $curso = $_POST["curso"];
    $email = $_POST["email"];

    function insereAluno($conexao, $nome, $ra, $curso, $email) {
        $query = "INSERT INTO aluno (nome, ra, curso, email) VALUES ('{$nome}','{$ra}','{$curso}','{$email}')";
        return mysqli_query($conexao, $query);
    }

    if($nome == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome!');window.location.href='aluno-formulario.php';</script>";
    } else if($ra == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu RA!');window.location.href='aluno-formulario.php';</script>";  
    } else if($email == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu email!');window.location.href='aluno-formulario.php';</script>";  
    } else if($curso == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar seu curso!');window.location.href='aluno-formulario.php';</script>";  
    }
    
    else if(insereAluno($conexao, $nome, $ra, $curso, $email)) {
            echo"<script language='javascript' type='text/javascript'>alert('Aluno adicionado com sucesso');window.location.href='aluno-lista.php';</script>";
        } else { 
            echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser adicionado');window.location.href='aluno-formulario.php';</script>";
            die();
        }

?>