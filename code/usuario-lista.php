<?php include('cabecalho.php'); 
      include('conecta.php');
      include('lista-usuario.php'); 
      $id = $_SESSION['codUser'];
      $verifica = mysqli_query($conexao, "SELECT nivel FROM usuario WHERE codUsuario = '$id'");
      $numero = mysqli_fetch_assoc($verifica);
      $nivel = $numero["nivel"];
?>
<?php
    if($nivel == 1 || $nivel == 2) {
?>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <table class="table table-striped table-bordered" coll>
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Usuario</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $usuarios = listaUsuario($conexao);
                                        foreach($usuarios as $usuario) :
                                    ?>
                                    <tbody>
                                        <td><?= $usuario['nome'] ?></td>
                                        <td><?= $usuario['user'] ?></td>
                                        <td><?= $usuario['email'] ?></td>
                                        <?php
                                            if($nivel == 1) {
                                        ?>
                                        <td>
                                            <a id="btnEditar" style="color: black" href="usuario-formulario-edicao.php?codUsuario=<?= $usuario['codUsuario'] ?>">                                 
                                                <i class="fa fa-edit"></i>
                                            </a>&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <?php
                                            }
                                        ?>
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