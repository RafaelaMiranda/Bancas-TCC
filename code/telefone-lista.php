<?php include('cabecalho.php');
      include('conecta.php');
      include('lista-telefone.php'); ?>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <table class="table table-striped table-bordered">
                                    
                                    <thead>
                                        <tr>
                                            <th>RA</th>
                                            <th>Número</th>
                                            <th>Tipo</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $telefones = listaTelefones($conexao);
                                        foreach($telefones as $telefone) :
                                    ?>
                                    <tbody>
                                        <td><?= $telefone['ra'] ?></td>
                                        <td><?= $telefone['numero'] ?></td>
                                        <td><?= $telefone['tipo'] ?></td>
                                        <td>
                                            <a id="btnEditar" style="color: black">                                 
                                                <i class="fa fa-edit"></i>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a id="btnDeletar" style="color: black" href="delete-telefone.php?codTelefone=<?= $telefone['codTelefone']?>">
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
<?php include('rodape.php') ?>


            