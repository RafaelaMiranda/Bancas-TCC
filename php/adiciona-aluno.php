<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-tcc.php");

    $nome = $_GET["nome"];
    $ra = $_GET["ra"];
    $email = $_GET["email"];
    $tituloTrabalho = $_GET["tituloTrabalho"];
    $areaPesquisa = $_GET["areaPesquisa"];
    $curso = $_GET["curso"];
    $orientador = $_GET["orientador"];

    if(insereAluno($conexao, $ra, $tituloTrabalho, $nome, $orientador, $areaPesquisa, $curso, $email)) { ?>
        <p class="text-success">Aluno <?= $nome;?>, <?= $ra;?>  adicionado com sucesso!</p>
    <?php } else { 
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Aluno <?= $nome;?> não foi adicionado: <?= $msg?></p>
    <?php
    }

    include("rodape.php");
?>