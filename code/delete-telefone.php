<?php include("conecta.php");

    $codTelefone = $_GET["codTelefone"];

  function deleteTelefone($conexao, $codTelefone) {
    $query = "DELETE FROM Telefone WHERE codTelefone = '{$codTelefone}'";
    return mysqli_query($conexao, $query);
  }

    if(deleteTelefone($conexao, $codTelefone)) {
        echo"<script language='javascript' type='text/javascript'>alert('Telefone deletado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser deletado');window.location.href='telefone-lista.php';</script>";
            die();
    }
?>