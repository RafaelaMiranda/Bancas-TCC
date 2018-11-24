<?php include('cabecalho.php'); 
      include('conecta.php');
      include('lista-log.php'); 
      $id = $_SESSION['codUser'];
      $verifica = mysqli_query($conexao, "SELECT nivel FROM usuario WHERE codUsuario = '$id'");
      $numero = mysqli_fetch_assoc($verifica);
      $nivel = $numero["nivel"];
?>

<?php
    if($nivel == 1) {
?>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <table class="table table-striped table-bordered" coll>
                                    <thead>
                                        <tr>
                                            <th>Ação</th>
                                            <th>Tabela</th>
                                            <th>Data e Hora</th>
                                            <th>Usuário</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $logs = listaLogs($conexao);
                                        foreach($logs as $log) :
                                    ?>
                                    <tbody>
                                        <td><?= $log['acao'] ?></td>
                                        <td><?= $log['tabela'] ?></td>
                                        <td><?= $log['creat_at'] ?></td>
                                        <td><?= $log['user'] ?></td>
                                    </tbody>
                                    <?php
                                        endforeach
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
    } else {
        echo("Permissão de acesso negada");
    }
?>

<?php include('rodape.php'); ?>