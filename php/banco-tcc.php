<?php
    /** PROFESSORES */
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

    /** ALUNOS */
    function listaAlunos($conexao) {
        $aluno = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM Aluno");
        while($alunos = mysqli_fetch_assoc($resultado)) {
            array_push($aluno, $alunos);
        }
        return $aluno;
    }

    function insereAluno($conexao, $ra, $tituloTrabalho, $nome, $orientador, $areaPesquisa, $curso, $email) {
        $query = "INSERT INTO Aluno (ra, tituloTrabalho, nome, orientador, areaPesquisa, curso, email) VALUES ('{$ra}','{$tituloTrabalho}', '{$nome}','{$orientador}','{$areaPesquisa}','{$curso}','{$email}')";
        return mysqli_query($conexao, $query);
    }

    /** TRABALHOS */
    function listaTrabalhos($conexao) {
        $trabalho = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM Trabalho");
        while($trabalhos = mysqli_fetch_assoc($resultado)) {
            array_push($trabalho, $trabalhos);
        }
        return $trabalho;
    }

    function insereTrabalho($conexao, $codProfessor, $convidado1, $convidado2, $autor, $titulo, $cursoAutor, $diaApresentacao, $horario, $sala, $eGrupo) {
        $query = "INSERT INTO Trabalho (codProfessor, convidado1, convidado2, autor, titulo, cursoAutor, diaApresentacao, horario, sala, eGrupo) VALUES ('{$ra}','{$tituloTrabalho}', '{$nome}','{$orientador}','{$areaPesquisa}','{$curso}','{$email}')";
        return mysqli_query($conexao, $query);
    }
