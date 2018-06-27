<?php
    function listaGrupos($conexao) {
        $grupos = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM grupo");
        while($grupo = mysqli_fetch_assoc($resultado)) {
            array_push($grupos, $grupo);
        }
        return $grupos;
    }
?>

    