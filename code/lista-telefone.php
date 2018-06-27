<?php
    function listaTelefones($conexao) {
        $telefones = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM telefone");
        while($telefone = mysqli_fetch_assoc($resultado)) {
            array_push($telefones, $telefone);
        }
        return $telefones;
    }
?>
    