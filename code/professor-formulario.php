<?php include('cabecalho.php');
      include('conecta.php');       
      $id = $_SESSION['codUser'];
      $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
      $numero = mysqli_fetch_assoc($verifica);
      $nivel = $numero["nivel"];
?>

<?php
    if($nivel == 1 || $nivel == 2) {
?>
                <form method="POST" action="adiciona-professor.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>

                        <div class="col-sm-9">
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titulação</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="graduado" > Graduado </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="mestre"> Mestre </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="doutor"> Doutor </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="titulacao" value="especialista"> Especialista </label>
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