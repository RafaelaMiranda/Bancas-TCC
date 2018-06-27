<?php include("conecta.php");

    $ra = $_GET["ra"];

  function deleteAluno($conexao, $ra) {
    $query = "DELETE FROM Aluno WHERE ra = '{$ra}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteAluno($conexao, $ra)) {
        echo"<script language='javascript' type='text/javascript'>alert('Aluno deletado com sucesso');window.location.href='aluno-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Aluno não pode ser deletado');window.location.href='aluno-lista.php';</script>";
            die();
    }
?>