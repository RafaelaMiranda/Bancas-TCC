<?php include('cabecalho.php');
      include('conecta.php');
      include('lista-grupo.php');
      include('lista-professor.php'); ?>

                <form method="POST" action="adiciona-apresentacao.php" class="form-horizontal" accept-charset="utf-8">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Trabalho</label>

                            <div class="col-sm-9">
                                <select class="form-control m-b" name="tituloTrabalho" id="tituloTrabalho">
                                    <option value=""></option>
                            <?php 
                                $grupos = listaGrupos($conexao);
                                foreach($grupos as $grupo) :
                            ?>
                                <option name="<?= $grupo['tituloTrabalho'] ?>"><?= $grupo['tituloTrabalho'] ?></option>
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
                                <option name="<?= $professor['nome'] ?>"><?= $professor['nome'] ?></option>
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
                                <option name="<?= $professor['nome'] ?>"><?= $professor['nome'] ?></option>
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
                                <input type="text" class="form-control" name="diaApresentacao">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hora</label>

                            <div class="col-sm-9">
                                <select class="form-control m-b" name="horario" id="horario">
                                    <option selected></option>
                                    <option value="07h30">07h30</option>
                                    <option value="08h00">08h00</option>
                                    <option value="08h30">08h30</option>
                                    <option value="09h00">09h00</option>
                                    <option value="09h30">09h30</option>
                                    <option value="10h00">10h00</option>
                                    <option value="10h30">10h30</option>
                                    <option value="11h00">11h00</option>
                                    <option value="11h30">11h30</option>
                                    <option value="12h00">12h00</option>
                                    <option value="12h30">12h30</option>
                                    <option value="13h00">13h00</option>
                                    <option value="13h30">13h30</option>
                                    <option value="14h00">14h00</option>
                                    <option value="14h30">14h30</option>
                                    <option value="15h00">15h00</option>
                                    <option value="15h30">15h30</option>
                                    <option value="16h00">16h00</option>
                                    <option value="16h30">16h30</option>
                                    <option value="16h00">16h00</option>
                                    <option value="16h30">16h30</option>
                                    <option value="17h00">17h00</option>
                                    <option value="17h30">17h30</option>
                                    <option value="18h00">18h00</option>
                                    <option value="18h30">18h30</option>
                                    <option value="19h00">19h00</option>
                                    <option value="19h30">19h30</option>
                                    <option value="20h00">20h00</option>
                                    <option value="20h30">20h30</option>
                                    <option value="21h00">21h00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sala</label>

                            <div class="col-sm-9">
                                <input type="text" id="sala" name="sala" class="form-control">
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
