<?php include('cabecalho.php');
      include('conecta.php'); 
      include('lista-professor.php');
      include('lista-aluno.php'); 
      
      if (isset($_GET['codGrupo'])) {

            $codGrupo = $_GET['codGrupo'];

            $sql = mysqli_query($conexao, "SELECT * FROM grupo WHERE codGrupo = '$codGrupo'");
            while($row = mysqli_fetch_array($sql)) {
                $codGrupo = $row['codGrupo'];
                $tituloTrabalho = $row['tituloTrabalho'];
                $orientador = $row['orientador'];
                $areaPesquisa = $row['areaPesquisa'];
                $alunoA = $row['alunoA'];
                $alunoB = $row['alunoB'];
                $alunoC = $row['alunoC'];
                $alunoD = $row['alunoD'];
            }
        }
        ?>
                <form method="POST" action="edita-grupo.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Trabalho</label>

                        <div class="col-sm-9">
                            <input type="hidden" id="codGrupo" name="codGrupo" class="form-control" value="<?php echo $codGrupo; ?>">
                            <input type="text" id="tituloTrabalho" name="tituloTrabalho" class="form-control" value="<?php echo $tituloTrabalho; ?>">
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
                                <option name="<?= $professor['nome'] ?>" value="<?= $professor['nome']?>" <?php if ($orientador == $professor['nome']) echo 'selected' ?>><?= $professor['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Area de Pesquisa</label>

                        <div class="col-sm-9">
                            <input type="text" id="areaPesquisa" name="areaPesquisa" class="form-control" value="<?php echo $areaPesquisa; ?>">
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
                                <option name="<?= $aluno['nome'] ?>" value="<?= $aluno['nome']?>" <?php if ($alunoA == $aluno['nome']) echo 'selected' ?>><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Aluno 2</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoB" id="alunoB">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>" value="<?= $aluno['nome']?>" <?php if ($alunoB == $aluno['nome']) echo 'selected' ?>><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Aluno 3</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoC" id="alunoC">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>" value="<?= $aluno['nome']?>" <?php if ($alunoC == $aluno['nome']) echo 'selected' ?>><?= $aluno['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                        </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label">Aluno 4</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="alunoD" id="alunoD">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['nome'] ?>" value="<?= $aluno['nome']?>" <?php if ($alunoD == $aluno['nome']) echo 'selected' ?>><?= $aluno['nome'] ?></option>
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