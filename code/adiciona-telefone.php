<?php include('conecta.php');

        $numero = $_POST["numero"];
        $ra = $_POST["ra"];
        $tipo = $_POST["tipo"];

    function insereTelefone($conexao, $numero, $ra, $tipo) {
        $query = "INSERT INTO telefone (numero, ra, tipo) VALUES ('{$numero}','{$ra}','{$tipo}')";
        return mysqli_query($conexao, $query);
    }
    
    if($numero == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o numero do telefone!');window.location.href='telefone-formulario.php';</script>";
    } else if($ra == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor inserir seu RA!');window.location.href='telefone-formulario.php';</script>";  
    } else if($tipo == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o tipo!');window.location.href='telefone-formulario.php';</script>";  
    } 
    
    else if(insereTelefone($conexao, $numero, $ra, $tipo)) {
        echo"<script language='javascript' type='text/javascript'>alert('Telefone adicionado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser adicionado');window.location.href='telefone-formulario.php';</script>";
            die();
    }
?>