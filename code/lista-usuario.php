<?php
    function listaUsuario($conexao) {
        $usuarios = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM usuario");
        while($usuario = mysqli_fetch_assoc($resultado)) {
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

?>