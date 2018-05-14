<?php include("cabecalho.php")?>

<div class="container">
	<form action="adiciona-professor.php">
		<div class="row">
			<div class="col-sm-8">
				<form>
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>

					<div class="form-group">
						<label for="nome">Titulação</label>
					</div>

					<div class="radio">
						<label>
							<input type="radio" name="titulacao" value="graduado"> Graduado
						</label>

						<label>
							<input type="radio" name="titulacao" value="mestre"> Mestre
						</label>

						<label>
							<input type="radio" name="titulacao" value="doutor"> Doutor
						</label>

						<label>
							<input type="radio" name="titulacao" value="especialista"> Especialista
						</label>

					</div>
					<br>

					<button type="submit" class="btn btn-success">
						<b>Cadastrar</b>
					</button>

				</form>

			</div>

		</div>

		<?php include("rodape.php"); ?>