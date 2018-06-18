<?php include("conecta.php");
      include("banco-tcc.php");

    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $email = $_POST["email"];
    $tituloTrabalho = $_POST["tituloTrabalho"];
    $areaPesquisa = $_POST["areaPesquisa"];
    $curso = $_POST["curso"];
    $orientador = $_POST["orientador"];

    function insereAluno($conexao, $ra, $tituloTrabalho, $nome, $orientador, $areaPesquisa, $curso, $email) {
        $query = "INSERT INTO Aluno (ra, tituloTrabalho, nome, orientador, areaPesquisa, curso, email) VALUES ('{$ra}','{$tituloTrabalho}', '{$nome}','{$orientador}','{$areaPesquisa}','{$curso}','{$email}')";
        return mysqli_query($conexao, $query);
    }

    if(insereAluno($conexao, $ra, $tituloTrabalho, $nome, $orientador, $areaPesquisa, $curso, $email)) {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno adicionado com sucesso');window.location.href='aluno-lista.html';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser adicionado');window.location.href='aluno-formulario.html';</script>";
        die();
    }
    
?>