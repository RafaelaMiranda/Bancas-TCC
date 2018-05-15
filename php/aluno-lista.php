<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-tcc.php"); ?>
 
<table class="table table-striped table-bordered">
    <?php 
        $alunos = listaAlunos($conexao);
        foreach($alunos as $aluno) :
    ?>
    <tr>
        <td><?= $aluno['nome'] ?></td>
        <td><?= $aluno['tituloTrabalho'] ?></td>
        <td><?= $aluno['orientador'] ?></td>
        <td><?= $aluno['curso'] ?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<?php include("rodape.php"); ?>