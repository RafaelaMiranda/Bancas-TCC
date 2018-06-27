<?php include("conecta.php");

    $codProfessor = $_GET["codProfessor"];

  function deleteProfessor($conexao, $codProfessor) {
    $query = "DELETE FROM Professor WHERE codProfessor = '{$codProfessor}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteProfessor($conexao, $codProfessor)) {
        echo"<script language='javascript' type='text/javascript'>alert('Professor deletado com sucesso');window.location.href='professor-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser deletado');window.location.href='professor-lista.php';</script>";
            die();
    }
?>