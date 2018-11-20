<?php
    function listaApresentacoes($conexao) {

        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT nome FROM usuario WHERE codUsuario = '$id'");
        $numero = mysqli_fetch_assoc($verifica);
        $nomeUsuario = $numero["nome"];
    
        $acao = "select";
        date_default_timezone_set('America/Sao_Paulo');
        $creat_at = date("d-m-Y H:i:s");
        $user = $nomeUsuario;
        $tabela = "trabalho";
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        

        $apresentacoes = array();
        $resultado = mysqli_query($conexao, 
        "SELECT T.codTrabalho,
                T.diaApresentacao,
                T.horario,
                T.sala,
                G.tituloTrabalho,
                G.orientador,
                T.convidado1,
                T.convidado2
        FROM trabalho T
        INNER JOIN grupo G ON T.codGrupo = G.codGrupo");
        while($apresentacao = mysqli_fetch_assoc($resultado)) {
            array_push($apresentacoes, $apresentacao);
        }
        return $apresentacoes;
    }
?>
    