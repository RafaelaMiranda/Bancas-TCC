<?php include('cabecalho.php');
      include('conecta.php');
      include('lista-grupo.php');
      include('lista-professor.php'); 

      if (isset($_GET['codTrabalho'])) {

            $codTrabalho = $_GET['codTrabalho'];

            $sql = mysqli_query($conexao, "SELECT * FROM trabalho WHERE codTrabalho = '$codTrabalho'");
            while($row = mysqli_fetch_array($sql)) {
                $codTrabalho = $row['codTrabalho'];
                $convidado1 = $row['convidado1'];
                $convidado2 = $row['convidado2'];
                $diaApresentacao = $row['diaApresentacao'];
                $horario = $row['horario'];
                $sala = $row['sala'];
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

                <form method="POST" action="edita-apresentacao.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <div class="form-group" style="display: none;">
                            <label class="col-sm-2 control-label">Trabalho</label>

                            <div class="col-sm-9">
                                <select class="form-control m-b" name="tituloTrabalho" id="tituloTrabalho">
                                    <option value=""></option>
                            <?php 
                                $grupos = listaGrupos($conexao);
                                foreach($grupos as $grupo) :
                            ?>
                                <option name="<?= $grupo['tituloTrabalho'] ?>" ><?= $grupo['tituloTrabalho'] ?></option>
                            <?php
                                endforeach
                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Convidado 1</label>
                            <div class="col-sm-9">
                                <select class="form-control m-b" name="convidado1" id="convidado1">
                                    <option value=""></option>
                            <?php 
                                $professores = listaProfessores($conexao);
                                foreach($professores as $professor) :
                            ?>
                                <option name="<?= $professor['nome'] ?>" value="<?= $professor['nome']?>" <?php if ($convidado1 == $professor['nome']) echo 'selected' ?>><?= $professor['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Convidado 2</label>
                            <div class="col-sm-9">
                                <select class="form-control m-b" name="convidado2" id="convidado2">
                                    <option value=""></option>
                            <?php 
                                $professores = listaProfessores($conexao);
                                foreach($professores as $professor) :
                            ?>
                                <option name="<?= $professor['nome'] ?>" value="<?= $professor['nome']?>" <?php if ($convidado2 == $professor['nome']) echo 'selected' ?>><?= $professor['nome'] ?></option>
                            <?php
                                endforeach
                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="data">
                            <label class="col-sm-2 control-label">Data</label>

                            <div class="col-sm-4 input-group date">
                                &nbsp;&nbsp;
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="hidden" id="codTrabalho" name="codTrabalho" class="form-control" value="<?php echo $codTrabalho; ?>">
                                <input type="text" class="form-control" name="diaApresentacao" value="<?php echo $diaApresentacao; ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hora</label>

                            <div class="col-sm-9">
                                <select class="form-control m-b" name="horario" id="horario">
                                    <option selected></option>
                                    <option value="07h30" <?php if ($horario == '07h30') echo 'selected'; ?>>07h30</option>
                                    <option value="08h00" <?php if ($horario == '08h00') echo 'selected'; ?>>08h00</option>
                                    <option value="08h30" <?php if ($horario == '08h30') echo 'selected'; ?>>08h30</option>
                                    <option value="09h00" <?php if ($horario == '09h00') echo 'selected'; ?>>09h00</option>
                                    <option value="09h30" <?php if ($horario == '09h30') echo 'selected'; ?>>09h30</option>
                                    <option value="10h00" <?php if ($horario == '10h00') echo 'selected'; ?>>10h00</option>
                                    <option value="10h30" <?php if ($horario == '10h30') echo 'selected'; ?>>10h30</option>
                                    <option value="11h00" <?php if ($horario == '11h00') echo 'selected'; ?>>11h00</option>
                                    <option value="11h30" <?php if ($horario == '11h30') echo 'selected'; ?>>11h30</option>
                                    <option value="12h00" <?php if ($horario == '12h00') echo 'selected'; ?>>12h00</option>
                                    <option value="12h30" <?php if ($horario == '12h30') echo 'selected'; ?>>12h30</option>
                                    <option value="13h00" <?php if ($horario == '13h00') echo 'selected'; ?>>13h00</option>
                                    <option value="13h30" <?php if ($horario == '13h30') echo 'selected'; ?>>13h30</option>
                                    <option value="14h00" <?php if ($horario == '14h00') echo 'selected'; ?>>14h00</option>
                                    <option value="14h30" <?php if ($horario == '14h30') echo 'selected'; ?>>14h30</option>
                                    <option value="15h00" <?php if ($horario == '15h00') echo 'selected'; ?>>15h00</option>
                                    <option value="15h30" <?php if ($horario == '15h30') echo 'selected'; ?>>15h30</option>
                                    <option value="16h00" <?php if ($horario == '16h00') echo 'selected'; ?>>16h00</option>
                                    <option value="16h30" <?php if ($horario == '16h30') echo 'selected'; ?>>16h30</option>
                                    <option value="17h00" <?php if ($horario == '17h00') echo 'selected'; ?>>17h00</option>
                                    <option value="17h30" <?php if ($horario == '17h30') echo 'selected'; ?>>17h30</option>
                                    <option value="18h00" <?php if ($horario == '18h00') echo 'selected'; ?>>18h00</option>
                                    <option value="18h30" <?php if ($horario == '18h30') echo 'selected'; ?>>18h30</option>
                                    <option value="19h00" <?php if ($horario == '19h00') echo 'selected'; ?>>19h00</option>
                                    <option value="19h30" <?php if ($horario == '19h30') echo 'selected'; ?>>19h30</option>
                                    <option value="20h00" <?php if ($horario == '20h00') echo 'selected'; ?>>20h00</option>
                                    <option value="20h30" <?php if ($horario == '20h30') echo 'selected'; ?>>20h30</option>
                                    <option value="21h00" <?php if ($horario == '21h00') echo 'selected'; ?>>21h00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sala</label>

                            <div class="col-sm-9">
                                <input type="text" id="sala" name="sala" value="<?php echo $sala; ?>" class="form-control">
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
<script>
    $('#data .input-group.date').datepicker({
        startView: 1,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
</script>
