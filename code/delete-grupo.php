<?php include("conecta.php");

    $codGrupo = $_GET["codGrupo"];

  function deleteGrupo($conexao, $codGrupo) {
    $query = "DELETE FROM Grupo WHERE codGrupo = '{$codGrupo}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteGrupo($conexao, $codGrupo)) {
        echo"<script language='javascript' type='text/javascript'>alert('Grupo deletado com sucesso');window.location.href='grupo-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser deletado');window.location.href='grupo-lista.php';</script>";
            die();
    }
?>