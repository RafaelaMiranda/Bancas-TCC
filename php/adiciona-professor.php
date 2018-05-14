<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-tcc.php");

    $nome = $_GET["nome"];
    $titulacao = $_GET["titulacao"];

    if(insereProfessor($conexao, $nome, $titulacao)) { ?>
        <p class="text-success">Professor <?= $nome;?>, <?= $titulacao;?>  adicionado com sucesso!</p>
    <?php } else { 
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Professor <?= $nome;?> não foi adicionado: <?= $msg?></p>
    <?php
    }

    include("rodape.php");
?>