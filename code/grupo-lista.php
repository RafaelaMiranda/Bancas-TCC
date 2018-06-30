<?php include('cabecalho.php');
      include('conecta.php');
      include('lista-grupo.php'); ?>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Trabalho</th>
                                            <th>Orientador</th>
                                            <th>Area</th>
                                            <th>Aluno 1</th>
                                            <th>Aluno 2</th>
                                            <th>Aluno 3</th>
                                            <th>Aluno 4</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $grupos = listaGrupos($conexao);
                                        foreach($grupos as $grupo) :
                                    ?>
                                    <tbody>
                                        <td><?= $grupo['tituloTrabalho'] ?></td>
                                        <td><?= $grupo['orientador'] ?></td>
                                        <td><?= $grupo['areaPesquisa'] ?></td>
                                        <td><?= $grupo['alunoA'] ?></td>
                                        <td><?= $grupo['alunoB'] ?></td>
                                        <td><?= $grupo['alunoC'] ?></td>
                                        <td><?= $grupo['alunoD'] ?></td>
                                        <td>
                                            <a id="btnEditar" style="color: black" href="grupo-formulario-edicao.php?codGrupo=<?= $grupo['codGrupo']?>">                                 
                                                <i class="fa fa-edit"></i>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a id="btnDeletar" style="color: black" href="delete-grupo.php?codGrupo=<?= $grupo['codGrupo']?>">
                                                <i class="fa fa-trash"></i> 
                                            </a>
                                        </td>
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
            