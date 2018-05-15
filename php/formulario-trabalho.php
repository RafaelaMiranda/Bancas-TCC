<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-sm-8">

                <form>

                    <div class="form-group">
                        <label for="nome">
                            <b>Nome do Autor</b>
                        </label>
                        <input type="text" class="form-control" id="autor" name="autor">
                    </div>

                    <div class="form-group">
                        <label for="nome">
                            <b>Titulo do Trabalho</b>
                        </label>
                        <input type="text" class="form-control" id="titulo" name="titulo">
                    </div>

                    <div class="form-group">
                        <label for="nome">
                            <b>Sala</b>
                        </label>
                        <input type="text" class="form-control" id="sala" name="sala">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <b>Curso</b>
                            </label>
                        </div>
                        <select class="custom-select" id="curso" name="curso">
                            <option selected>Escolha...</option>
                            <option value="1">Análise e Desenvolvimento de Sistemas</option>
                            <option value="2">Jogos Digitais</option>
                            <option value="3">Gestão Empresarial</option>
                            <option value="4">Logística</option>
                            <option value="5">Produção Têxtil</option>
                            <option value="6">Segurança da Informação</option>
                            <option value="7">Têxtil e Moda</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <b>Orientedor</b>
                            </label>
                        </div>
                        <select class="custom-select" id="orientador" name="orientador">
                            <option selected>Escolha...</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <b>Convidado 1</b>
                            </label>
                        </div>
                        <select class="custom-select" id="convidadi1" name="convidado1">
                            <option selected>Escolha...</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <b>Convidado 2</b>
                            </label>
                        </div>
                        <select class="custom-select" id="convidado2" name="convidado2">
                            <option selected>Escolha...</option>
                        </select>
                    </div>

                    <p>
                        <label for="date">Example date</label>
                        <input type="date" id="date" />
                    </p>

                    <p>
                        <label for="time">Example time</label>
                        <input type="time" id="time" />
                    </p>

                    <div class="form-group">
							<label for="nome">Trabalho em grupo</label>		
   					</div>

   					<div class="radio">
   						<label>
   							<input type="radio" name="eGrupo"> Sim
   						</label>

   						<label>
   							<input type="radio" name="eGrupo"> Não
						   </label>

					   </div>
					   <br>

                    <button type="submit" class="btn btn-success">
                        <b>Cadastrar</b>
                    </button>

                </form>

            </div>

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>