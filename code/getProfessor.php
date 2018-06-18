<?php 
    header('Content-Type: text/html; charset=utf-8');
    include('conecta.php');
    //Conectando ao banco de dados
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($conexao, "SELECT * FROM Professor");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        header('Content-Type: text/html; charset=utf-8');
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
?>