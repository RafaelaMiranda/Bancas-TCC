<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-tcc.php"); ?>
 
<table class="table table-striped table-bordered">
    <?php 
        $professores = listaProfessores($conexao);
        foreach($professores as $professor) :
    ?>
    <tr>
        <td><?= $professor['nome'] ?></td>
        <td><?= $professor['titulacao'] ?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<?php include("rodape.php"); ?>