<?php include("conecta.php");

    $tituloTrabalho = $_POST["tituloTrabalho"];
    $orientador = $_POST["orientador"];
    $areaPesquisa = $_POST["areaPesquisa"];
    $alunoA = $_POST["alunoA"];
    $alunoB = $_POST["alunoB"];
    $alunoC = $_POST["alunoC"];
    $alunoD = $_POST["alunoD"];

    function insereGrupo($conexao, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD) {
        $query = "INSERT INTO Grupo (tituloTrabalho, orientador, areaPesquisa, alunoA, alunoB, alunoC, alunoD) VALUES ('{$tituloTrabalho}','{$orientador}','{$areaPesquisa}','{$alunoA}','{$alunoB}','{$alunoC}','{$alunoD}')";
        return mysqli_query($conexao, $query);
    }

    if(insereGrupo($conexao, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD)) {
        echo"<script language='javascript' type='text/javascript'>alert('Grupo adicionado com sucesso');window.location.href='grupo-lista.html';</script>";
    }

    else {
        echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser adicionado');window.location.href='grupo-formulario.html';</script>";
        die();
    }
    
?>