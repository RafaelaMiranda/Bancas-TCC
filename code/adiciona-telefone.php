<?php include("conecta.php");

    $numero = $_POST["numero"];
    $ra = $_POST["ra"];
    $tipo = $_POST["tipo"];

    function insereTelefone($conexao,$numero,$ra,$tipo) {
        
        $query = "INSERT INTO Telefone (numero,ra,tipo) VALUES ('{$numero}','{$ra}','{$tipo}')";
        return mysqli_query($conexao, $query);
    }

    if(insereTelefone($conexao, $numero,$ra,$tipo)) {
        echo"<script language='javascript' type='text/javascript'>alert('Telefone adicionado com sucesso');window.location.href='telefone-lista.html';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser adicionado');window.location.href='telefone-formulario.html';</script>";
        die();
    }

?>