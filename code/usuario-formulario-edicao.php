<?php include('cabecalho.php'); 
      include('conecta.php'); 

      if (isset($_GET['codUsuario'])) {

            $codUsuario = $_GET['codUsuario'];

            $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$codUsuario'");
            while($row = mysqli_fetch_array($sql)) {
                $codUsuario = $row['codUsuario'];
                $nome = $row['nome'];
                $user = $row['user'];
                $email = $row['email'];
                $senha = $row['senha'];
                $status = $row['status'];
                $permissao = $row['nivel'];
            }
        }
        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
        $numero = mysqli_fetch_assoc($verifica);
        $nivel = $numero["nivel"];
  ?>
  
  <?php
      if($nivel == 1) {
  ?>
                <form method="POST" action="edita-usuario.php" class="form-horizontal" accept-charset="utf-8">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="hidden" id="codUsuario" name="codUsuario" class="form-control" value="<?php echo $codUsuario; ?>">
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">User</label>

                        <div class="col-sm-9">
                            <input type="text" id="user" name="user" class="form-control" value="<?php echo $user; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail</label>

                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="status" id="status">
                                <option selected value="1">Ativo</option>
                                <option value="0" <?php if ($status == '0') echo 'selected'; ?> >Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Permissão</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" name="nivel" id="nivel">
                                <option value="1" <?php if ($permissao == '1') echo 'selected'; ?> >Administrador</option>
                                <option value="2" <?php if ($permissao == '2') echo 'selected'; ?> >Secretaria</option>
                                <option value="3" <?php if ($permissao == '3') echo 'selected'; ?> >Professor</option>
                                <option value="4" <?php if ($permissao == '4') echo 'selected'; ?> >Indefinido</option>
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
<?php
    } else {
        echo("Permissão de acesso negada");
    }
?>

<?php include('rodape.php'); ?>