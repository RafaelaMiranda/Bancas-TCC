<?php
    function listaProfessores($conexao) {
        $professores = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM Professor");
        while($professor = mysqli_fetch_assoc($resultado)) {
            array_push($professores, $professor);
        }
        return $professores;
    }

    function insereProfessor($conexao, $nome, $titulacao) {
        $query = "INSERT INTO Professor (nome, titulacao) VALUES ('{$nome}','{$titulacao}')";
        return mysqli_query($conexao, $query);
    }