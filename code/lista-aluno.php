<?php
    function listaAlunos($conexao) {

        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
        $numero = mysqli_fetch_assoc($verifica);
        $nomeUsuario = $numero["nome"];
    
        $acao = "select";
        date_default_timezone_set('America/Sao_Paulo');
        $creat_at = date("d-m-Y H:i:s");
        $user = $nomeUsuario;
        $tabela = "aluno";
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        
        $alunos = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM aluno");
        while($aluno = mysqli_fetch_assoc($resultado)) {
            array_push($alunos, $aluno);
        }
        return $alunos;
    }

?>