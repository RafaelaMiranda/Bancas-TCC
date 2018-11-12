<?php include('conecta.php');
      include('cabecalho.php');?>

                    <form method="POST" action="edita-senha.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha atual</label>

                        <div class="col-sm-9">
                            <input type="password" id="senha_atual" name="senha_atual" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nova senha</label>

                        <div class="col-sm-9">
                            <input type="password" id="senha_nova" name="senha_nova" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Confirme a nova senha</label>

                        <div class="col-sm-9">
                            <input type="password" id="confirme_senha" name="confirme_senha" class="form-control">
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