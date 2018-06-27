<?php include('cabecalho.php'); 
      include('conecta.php'); ?>
                <form method="POST" action="adiciona-aluno.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">RA</label>

                        <div class="col-sm-9">
                            <input type="text" id="ra" name="ra" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail</label>

                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control" placeholder="exemplo: joao@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Curso</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="curso" id="curso">
                                <option selected></option>
                                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                                <option value="Jogos Digitais">Jogos Digitais</option>
                                <option value="Gestão Empresarial">Gestão Empresarial</option>
                                <option value="Logística">Logística</option>
                                <option value="Produção Têxtil">Produção Têxtil</option>
                                <option value="Segurança da Informação">Segurança da Informação</option>
                                <option value="Têxtil e Moda">Têxtil e Moda</option>
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