<?php
    function listaProfessores($conexao) {
        $professores = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM professor");
        while($professor = mysqli_fetch_assoc($resultado)) {
            array_push($professores, $professor);
        }
        return $professores;
    }
    
    
?>
    