<?php
    function listaLogs($conexao) {
        $logs = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM logs");
        while($log = mysqli_fetch_assoc($resultado)) {
            array_push($logs, $log);
        }
        return $logs;
    }

?>