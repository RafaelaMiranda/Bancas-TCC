<?php
    function listaProfessores($conexao) {
        $professor = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM Professor");
        while($professores = mysqli_fetch_assoc($resultado)) {
            array_push($professor, $professores);
        }
        return $professor;
    }

    function insereProfessor($conexao,$nome, $titulacao) {
        $query = "INSERT INTO Professor (nome, titulacao) VALUES ('{$nome}','{$titulacao}')";
        return mysqli_query($conexao, $query);
    }