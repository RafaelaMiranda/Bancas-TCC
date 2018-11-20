<?php include('conecta.php');
        session_start();
        $numero = $_POST["numero"];
        $ra = $_POST["ra"];
        $tipo = $_POST["tipo"];

        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
        $numero2 = mysqli_fetch_assoc($verifica);
        $nomeUsuario = $numero2["nome"];

        $acao = "insert";
        date_default_timezone_set('America/Sao_Paulo');
        $creat_at = date("d-m-Y H:i:s");
        $user = $nomeUsuario;
        $tabela = "telefone";

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
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Telefone adicionado com sucesso');window.location.href='telefone-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Telefone não pode ser adicionado');window.location.href='telefone-formulario.php';</script>";
            die();
    }
?>