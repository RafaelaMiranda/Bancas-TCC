<?php include("conecta.php");

    $codGrupo = $_POST['codGrupo'];
    $tituloTrabalho = $_POST['tituloTrabalho'];
    $orientador = $_POST['orientador'];
    $areaPesquisa = $_POST['areaPesquisa'];
    $alunoA = $_POST['alunoA'];
    $alunoB = $_POST['alunoB'];
    $alunoC = $_POST['alunoC'];
    $alunoD = $_POST['alunoD'];
            
  function updateGrupo($conexao, $codGrupo, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD ) {
    $query = "UPDATE Grupo SET tituloTrabalho = '{$tituloTrabalho}', orientador = '{$orientador}', areaPesquisa = '{$areaPesquisa}', alunoA = '{$alunoA}', alunoB = '{$alunoB}', alunoC = '{$alunoC}', alunoD = '{$alunoD}' WHERE codGrupo = '{$codGrupo}'";
    return mysqli_query($conexao, $query);
  }

    if(updateGrupo($conexao, $codGrupo, $tituloTrabalho, $orientador, $areaPesquisa, $alunoA, $alunoB, $alunoC, $alunoD )) {
        $codGrupo = mysqli_fetch_row(mysqli_query($conexao,"SELECT MAX(codGrupo) FROM Grupo"));
        $aluno = mysqli_query($conexao, "UPDATE Aluno SET codGrupo = '$codGrupo[0]' WHERE nome = '$alunoA' OR nome = '$alunoB' OR nome = '$alunoC' OR nome = '$alunoD'");
        echo"<script language='javascript' type='text/javascript'>alert('Grupo editado com sucesso');window.location.href='grupo-lista.php';</script>";
    } else { 
        echo"<script language='javascript' type='text/javascript'>alert('Grupo não pode ser editado');window.location.href='grupo-lista.php';</script>";
        die();
    }
?>