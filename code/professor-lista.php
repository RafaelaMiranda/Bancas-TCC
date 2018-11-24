<?php include('cabecalho.php'); 
      include('conecta.php');
      include('lista-professor.php'); 
      $id = $_SESSION['codUser'];
      $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
      $numero = mysqli_fetch_assoc($verifica);
      $nivel = $numero["nivel"];
?>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <table class="table table-striped table-bordered" coll>
                                    <thead>
                                        <tr>
                                            <th>Professor</th>
                                            <th>Titulação</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $professores = listaProfessores($conexao);
                                        foreach($professores as $professor) :
                                    ?>
                                    <tbody>
                                        <td><?= $professor['nome'] ?></td>
                                        <td><?= $professor['titulacao'] ?></td>
                                        <?php
                                            if($nivel == 1 || $nivel == 2) {
                                        ?>
                                        <td>
                                            <a id="btnEditar" style="color: black" href="professor-formulario-edicao.php?codProfessor=<?= $professor['codProfessor'] ?>">                                 
                                                <i class="fa fa-edit"></i>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a id="btnDeletar" style="color: black" href="delete-professor.php?codProfessor=<?= $professor['codProfessor']?>">
                                                <i class="fa fa-trash"></i> 
                                            </a>
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
<?php include('rodape.php'); ?>