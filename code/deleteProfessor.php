<?php include("conecta.php");

    $codProfessor = $_POST["codProfessor"];
  
    $query = "DELETE FROM Professor WHERE codProfessor = '{$codProfessor}'";
    return mysqli_query($conexao, $query);

?>