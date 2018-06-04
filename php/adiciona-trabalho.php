<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-tcc.php");

    $codProfessor = $_GET["codProfessor"];
    $convidado1 = $_GET["convidado1"];
    $convidado2 = $_GET["convidado2"];
    $autor = $_GET["autor"];
    $titulo = $_GET["titulo"];
    $cursoAutor = $_GET["cursoAutor"];
    $diaApresentacao = $_GET["diaApresentacao"];
    $horario = $_GET["horario"];
    $sala = $_GET["sala"];
    $eGrupo = $_GET["eGrupo"];

    if(insereTrabalho($conexao, $codProfessor, $convidado1, $convidado2, $autor, $titulo, $cursoAutor, $diaApresentacao, $horario, $sala, $eGrupo)) { ?>
        <p class="text-success">Trabalho <?= $titulo;?> adicionado com sucesso!</p>
    <?php } else { 
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Trabalho <?= $titualo;?> não foi adicionado: <?= $msg?></p>
    <?php
    }

    include("rodape.php");
?>