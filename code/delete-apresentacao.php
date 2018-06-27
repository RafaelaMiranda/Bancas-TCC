<?php include("conecta.php");

    $codTrabalho = $_GET["codTrabalho"];

  function deleteApresentacao($conexao, $codTrabalho) {
    $query = "DELETE FROM trabalho WHERE codTrabalho = '{$codTrabalho}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteApresentacao($conexao, $codTrabalho)) {
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação deletado com sucesso');window.location.href='index.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Apresentação não pode ser deletado');window.location.href='index.php';</script>";
        die();
    }
?>