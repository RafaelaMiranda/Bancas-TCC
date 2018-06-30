<?php include("conecta.php");

    $codTelefone = $_POST['codTelefone'];
    $numero = $_POST["numero"];
    $ra = $_POST["ra"];
    $tipo = $_POST["tipo"];


  function updateTelefone($conexao, $codTelefone, $numero, $ra, $tipo) {
    $query = "UPDATE Telefone SET numero = '{$numero}', ra = '{$ra}', tipo = '{$tipo}' WHERE codTelefone = '{$codTelefone}'";
    return mysqli_query($conexao, $query);
  }

    if(updateTelefone($conexao, $codTelefone, $numero, $ra, $tipo)) {
        echo"<script language='javascript' type='text/javascript'>alert('Telefone editado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser editado');window.location.href='telefone-lista.php';</script>";
        die();
    }
?>