<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    
   	<div class="container">
   		
   		<div class="page-header">
   			<h1>Cadastro Professores</h1>
   		</div>

   		<div class="row">
   			<div class="col-sm-8">
   				<h3>Cadastre-se</h3>
   				<form>

   					<div class="form-group">
   						<label for="nome">Nome</label>
   						<input type="text" class="form-control" id="nome">
   					</div>

   					<div class="form-group">
							<label for="nome">Titulação</label>		
   					</div>

   					<div class="radio">
   						<label>
   							<input type="radio" name="opcoes"> Graduado
   						</label>

   						<label>
   							<input type="radio" name="opcoes"> Mestre
						   </label>
						   
						   <label>
							<input type="radio" name="opcoes"> Doutor
						</label>

						<label>
							<input type="radio" name="opcoes"> Especialista
						</label>

					   </div>
					   <br>

   					<button type="submit" class="btn btn-success"><b>Cadastrar</b></button>

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