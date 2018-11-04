<?php include('cabecalho.php'); 
      include('conecta.php'); ?>

                    <form method="POST" action="adiciona-usuario.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">User</label>

                        <div class="col-sm-9">
                            <input type="text" id="user" name="user" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail</label>

                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha</label>

                        <div class="col-sm-9">
                            <input type="password" id="senha" name="senha" class="form-control">
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