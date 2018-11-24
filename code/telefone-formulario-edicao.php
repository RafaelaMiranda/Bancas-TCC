<?php include('cabecalho.php');
      include('conecta.php'); 
      include('lista-aluno.php'); 

      if (isset($_GET['codTelefone'])) {

            $codTelefone = $_GET['codTelefone'];

            $sql = mysqli_query($conexao, "SELECT * FROM telefone WHERE codTelefone = '$codTelefone'");
            while($row = mysqli_fetch_array($sql)) {
                $codTelefone = $row['codTelefone'];
                $ra = $row['ra'];
                $numero = $row['numero'];
                $tipo = $row['tipo'];
            }
        }
        $id = $_SESSION['codUser'];
        $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
        $numero = mysqli_fetch_assoc($verifica);
        $nivel = $numero["nivel"];
  ?>
  
  <?php
      if($nivel == 1 || $nivel == 2) {
  ?>
                <form method="POST" action="edita-telefone.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Número</label>

                        <div class="col-sm-9">
                            <input type="hidden" id="codTelefone" name="codTelefone" class="form-control" value="<?php echo $codTelefone; ?>">
                            <input type="hidden" id="ra" name="ra" class="form-control" value="<?php echo $ra; ?>">
                            <input type="text" id="numero" name="numero" class="form-control" value="<?php echo $numero; ?>">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="col-sm-2 control-label">RA</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" id="ra" name="ra">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>  
                                <option disabled name ="<?= $aluno['ra']?>" value="<?= $aluno['ra']?>" <?php if ($ra == $ra) echo 'selected' ?> ><?= $aluno['ra'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="fixo" <?php if ($tipo == 'fixo') echo 'checked="checked"'; ?>> Fixo </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="celular" <?php if ($tipo == 'celular') echo 'checked="checked"'; ?>> Celular </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="comercial" <?php if ($tipo == 'comercial') echo 'checked="checked"'; ?>> Comercial </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="outro" <?php if ($tipo == 'outro') echo 'checked="checked"'; ?>> Outro </label>
                            </div>

                        </div>
                    </div>
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