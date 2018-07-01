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

    if($tituloTrabalho == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o título do trabalho!');window.location.href='grupo-formulario.php';</script>";
    } else if($orientador == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o orientador!');window.location.href='grupo-formulario.php';</script>";  
    } else if($areaPesquisa == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor preencher a areá de pesquisa!');window.location.href='grupo-formulario.php';</script>";  
    }  else if($alunoA == '') {
        echo"<script language='javascript' type='text/javascript'>alert('Favor selecionar o(s) Aluno(s)!');window.location.href='grupo-formulario.php';</script>";
    }
    
    else if(insereGrupo($conexao, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD)) {
            $codGrupo = mysqli_fetch_row(mysqli_query($conexao,"SELECT MAX(codGrupo) FROM Grupo"));
            $aluno = mysqli_query($conexao, "UPDATE Aluno SET codGrupo = '$codGrupo[0]' WHERE nome = '$alunoA' OR nome = '$alunoB' OR nome = '$alunoC' OR nome = '$alunoD'");
            echo"<script language='javascript' type='text/javascript'>alert('Grupo adicionado com sucesso');window.location.href='grupo-lista.php';</script>";
        } else { 
            echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser adicionado');window.location.href='grupo-formulario.php';</script>";
            die();
        }
?>