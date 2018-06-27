<?php include('cabecalho.php');
      include('conecta.php'); 
      include('lista-professor.php');
      include('lista-aluno.php'); ?>
                <form method="POST" action="adiciona-grupo.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Trabalho</label>

                        <div class="col-sm-9">
                            <input type="text" id="tituloTrabalho" name="tituloTrabalho" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Orientador</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="orientador" id="orientador">
                                <option value=""></option>
                            <?php 
                                $professores = listaProfessores($conexao);
                                foreach($professores as $professor) :
                            ?>
                                <option name="<?= $professor['nome'] ?>"><?= $professor['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Area de Pesquisa</label>

                        <div class="col-sm-9">
                            <input type="text" id="areaPesquisa" name="areaPesquisa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Aluno 1</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoA" id="alunoA">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>"><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn-toggle" data-element="#minhaDiv">
                                <i class="fa fa-plus" style="color: black; font-size: 20px; width: 20px">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group" id="minhaDiv" style="display:none">
                        <label class="col-sm-2 control-label">Aluno 2</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoB" id="alunoB">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>"><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn-toggle" data-element="#minhaDiv2">
                                <i class="fa fa-plus" style="color: black; font-size: 20px; width: 20px">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group" style="display:none" id="minhaDiv2">
                        <label class="col-sm-2 control-label">Aluno 3</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoC" id="alunoC">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>"><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn-toggle" data-element="#minhaDiv3">
                                <i class="fa fa-plus" style="color: black; font-size: 20px; width: 20px">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group" style="display:none" id="minhaDiv3" style="display:none">
                        <label class="col-sm-2 control-label">Aluno 4</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoD" id="alunoD">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>"><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                    </div>


                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </div>
                </form>
<?php include('rodape.php'); ?>
<script>
    $(function () {
        $(".btn-toggle").click(function (e) {
            e.preventDefault();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>