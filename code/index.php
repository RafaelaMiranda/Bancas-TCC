<?php include('cabecalho.php');
      include('conecta.php');
      include('lista-apresentacao.php'); ?>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Horário</th>
                                            <th>Curso</th>
                                            <th>Sala</th>
                                            <th>Título</th>
                                            <th>Orientador</th>
                                            <th>Convidado 1</th>
                                            <th>Convidado 2</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $apresentacoes = listaApresentacoes($conexao);
                                        foreach($apresentacoes as $apresentacao) :
                                    ?>
                                    <tbody>
                                        <td><?= $apresentacao['diaApresentacao'] ?></td>
                                        <td><?= $apresentacao['horario'] ?></td>
                                        <td><?= $apresentacao['curso'] ?></td>
                                        <td><?= $apresentacao['sala'] ?></td>
                                        <td><?= $apresentacao['tituloTrabalho'] ?></td>
                                        <td><?= $apresentacao['orientador'] ?></td>
                                        <td><?= $apresentacao['convidado1'] ?></td>
                                        <td><?= $apresentacao['convidado2'] ?></td>
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