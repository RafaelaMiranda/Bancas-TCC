<?php include('cabecalho.php');
      include('conecta.php'); 

       if (isset($_GET['codProfessor'])) {

            $codProfessor = $_GET['codProfessor'];

            $sql = mysqli_query($conexao, "SELECT * FROM professor WHERE codProfessor = '$codProfessor'");
            while($row = mysqli_fetch_array($sql)) {
                $codProfessor = $row['codProfessor'];
                $nome = $row['nome'];
                $titulacao = $row['titulacao'];
            }
        }
      ?>
                <form method="POST" action="edita-professor.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="hidden" id="codProfessor" name="codProfessor" class="form-control" value="<?php echo $codProfessor; ?>">
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulação</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="graduado" <?php if ($titulacao == 'graduado') echo 'checked="checked"'; ?> /> Graduado </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="mestre" <?php if ($titulacao == 'mestre') echo 'checked="checked"'; ?> /> Mestre </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="doutor" <?php if ($titulacao == 'doutor') echo 'checked="checked"'; ?> /> Doutor </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="especialista" <?php if ($titulacao == 'especialista') echo 'checked="checked"'; ?> /> Especialista </label>
                            </div>

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