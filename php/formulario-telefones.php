<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário Telefone</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
	 crossorigin="anonymous">
</head>

<body>

	<div class="container">

		<div class="row">
			<div class="col-sm-8">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">
								<b>RA</b>
							</label>
						</div>
						<select class="custom-select" id="ra" name="ra">
							<option selected>Escolha...</option>

						</select>
					</div>

					<div class="form-group">
						<label for="nome">
							<b>Numero do Telefone</b>
						</label>
						<input type="text" class="form-control" id="numero" name="numero">
					</div>

					<div class="form-group">
						<label for="nome">
							<b>Tipo</b>
						</label>
					</div>

					<div class="radio">
						<label>
							<input type="radio" name="opcoes" name="tipo"> Casa
						</label>

						<label>
							<input type="radio" name="opcoes" name="tipo"> Celular
						</label>

						<label>
							<input type="radio" name="opcoes" name="tipo"> Trabalho
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