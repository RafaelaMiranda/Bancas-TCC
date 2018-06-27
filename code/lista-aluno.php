<?php
    function listaAlunos($conexao) {
        $alunos = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM aluno");
        while($aluno = mysqli_fetch_assoc($resultado)) {
            array_push($alunos, $aluno);
        }
        return $alunos;
    }

?>