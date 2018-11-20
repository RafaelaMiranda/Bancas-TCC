<?php include('conecta.php');
        session_start();
        $nome = $_POST["nome"];
        $titulacao = $_POST["titulacao"];

        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
        $numero = mysqli_fetch_assoc($verifica);
        $nomeUsuario = $numero["nome"];

        $acao = "insert";
        date_default_timezone_set('America/Sao_Paulo');
        $creat_at = date("d-m-Y H:i:s");
        $user = $nomeUsuario;
        $tabela = "professor";
      
    function insereProfessor($conexao,$nome, $titulacao) {
        $query = "INSERT INTO professor (nome, titulacao) VALUES ('{$nome}','{$titulacao}')";
        return mysqli_query($conexao, $query);
    }

    if($nome == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com seu nome');window.location.href='professor-formulario.php';</script>";
    } else if($titulacao == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor escolher a sua titulação');window.location.href='professor-formulario.php';</script>";  
    }

    if(insereProfessor($conexao, $nome, $titulacao)) {
            $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");    
            echo"<script language='javascript' type='text/javascript'>alert('Professor adicionado com sucesso');window.location.href='professor-lista.php';</script>";
        } else { 
            echo"<script language='javascript' type='text/javascript'>alert('Professor não pode ser adicionado');window.location.href='professor-formulario.php';</script>";
            die();
        }
?>