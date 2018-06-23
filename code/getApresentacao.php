<?php include('conecta.php');
    //Conectando ao banco de dados
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($conexao, 
    "SELECT T.diaApresentacao,
            T.horario,
            A.curso,
            T.sala,
            G.tituloTrabalho,
            G.orientador,
            T.convidado1,
            T.convidado2
    FROM Trabalho T
    INNER JOIN Grupo G ON T.codGrupo = G.codGrupo
    INNER JOIN Aluno A ON T.codTrabalho = A.codTrabalho"
); 
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('htmlentities', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo html_entity_decode(json_encode($vetor));
?>