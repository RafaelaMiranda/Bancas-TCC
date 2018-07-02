<?php
    function listaApresentacoes($conexao) {
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
        FROM Trabalho T
        INNER JOIN Grupo G ON T.codGrupo = G.codGrupo");
        while($apresentacao = mysqli_fetch_assoc($resultado)) {
            array_push($apresentacoes, $apresentacao);
        }
        return $apresentacoes;
    }
?>
    