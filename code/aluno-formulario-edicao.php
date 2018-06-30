<?php include('cabecalho.php'); 
      include('conecta.php'); 

      if (isset($_GET['ra'])) {

            $ra = $_GET['ra'];

            $sql = mysqli_query($conexao, "SELECT * FROM aluno WHERE ra = '$ra'");
            while($row = mysqli_fetch_array($sql)) {
                $ra = $row['ra'];
                $nome = $row['nome'];
                $email = $row['email'];
                $curso = $row['curso'];
            }
        }
      ?>
                <form method="POST" action="edita-aluno.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">RA</label>

                        <div class="col-sm-9">
                            <input type="text" id="ra" name="ra" class="form-control" value="<?php echo $ra; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail</label>

                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control" placeholder="exemplo: joao@gmail.com" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Curso</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="curso" id="curso">
                                <option selected></option>
                                <option value="Análise e Desenvolvimento de Sistemas" <?php if ($curso == 'Análise e Desenvolvimento de Sistemas') echo 'selected'; ?> >Análise e Desenvolvimento de Sistemas</option>
                                <option value="Jogos Digitais" <?php if ($curso == 'Jogos Digitais') echo 'selected'; ?>>Jogos Digitais</option>
                                <option value="Gestão Empresarial" <?php if ($curso == 'Gestão Empresarial') echo 'selected'; ?>>Gestão Empresarial</option>
                                <option value="Logística" <?php if ($curso == 'Logística') echo 'selected'; ?>>Logística</option>
                                <option value="Produção Têxtil" <?php if ($curso == 'Produção Têxtil') echo 'selected'; ?>>Produção Têxtil</option>
                                <option value="Segurança da Informação" <?php if ($curso == 'Segurança da Informação') echo 'selected'; ?>>Segurança da Informação</option>
                                <option value="Têxtil e Moda" <?php if ($curso == 'Têxtil e Moda') echo 'selected'; ?>>Têxtil e Moda</option>
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