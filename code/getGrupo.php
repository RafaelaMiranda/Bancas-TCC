<?php include('conecta.php');
    //Conectando ao banco de dados
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($conexao, "SELECT * FROM Grupo"); 
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('htmlentities', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo html_entity_decode(json_encode($vetor));
?>