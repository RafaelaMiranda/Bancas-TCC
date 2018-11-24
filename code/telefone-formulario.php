<?php include('cabecalho.php');
      include('conecta.php'); 
      include('lista-aluno.php'); 
      $id = $_SESSION['codUser'];
      $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
      $numero = mysqli_fetch_assoc($verifica);
      $nivel = $numero["nivel"];
?>

<?php
    if($nivel == 1 || $nivel == 2) {
?>
                <form method="POST" action="adiciona-telefone.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Número</label>

                        <div class="col-sm-9">
                            <input type="text" id="numero" name="numero" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">RA</label>

                        <div class="col-sm-9">
                            <select class="form-control m-b" id="ra" name="ra">
                                <option value=""></option>
                            <?php 
                                $alunos = listaAlunos($conexao);
                                foreach($alunos as $aluno) :
                            ?>
                                <option name="<?= $aluno['ra'] ?>"><?= $aluno['ra'] ?></option>
                            <?php
                                endforeach
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="fixo"> Fixo </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="celular"> Celular </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="comercial"> Comercial </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="outro"> Outro </label>
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
<?php
    } else {
        echo("Permissão de acesso negada");
    }
?>

<?php include('rodape.php'); ?>
                