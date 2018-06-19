<?php include("conecta.php");

    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];

    function insereAluno($conexao, $ra, $nome, $curso, $email) {
        $query = "INSERT INTO Aluno (ra, nome, curso, email) VALUES ('{$ra}','{$nome}','{$curso}','{$email}')";
        return mysqli_query($conexao, $query);
    }

    if(insereAluno($conexao, $ra, $nome, $curso, $email)) {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno adicionado com sucesso');window.location.href='aluno-lista.html';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser adicionado');window.location.href='aluno-formulario.html';</script>";
        die();
    }
    
?>