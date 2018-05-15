<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-tcc.php"); ?>

<form action="adiciona-aluno.php">
<div class="row">
	<div class="col-sm-8">

		<form>

			<div class="form-group">
				<label for="nome">
					<b>Nome</b>
				</label>
				<input type="text" class="form-control" id="nome" name="nome">
			</div>

			<div class="form-group">
				<label for="nome">
					<b>RA</b>
				</label>
				<input type="text" class="form-control" id="ra" name="ra">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">
					<b>Email</b>
				</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="exemplo: joao@gmail.com">
				<small id="emailHelp" class="form-text text-muted"></small>
			</div>

			<div class="form-group">
				<label for="nome">
					<b>Titulo do Trabalho</b>
				</label>
				<input type="text" class="form-control" id="tituloTrabalho" name="tituloTrabalho">
			</div>

			<div class="form-group">
				<label for="nome">
					<b>Area de Pesquisa</b>
				</label>
				<input type="text" class="form-control" id="areaPesquisa" name="areaPesquisa">
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">
						<b>Curso</b>
					</label>
				</div>
				<select class="custom-select" id="curso" name="curso">
					<option selected>Escolha...</option>
					<option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
					<option value="Jogos Digitais">Jogos Digitais</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
					<option value="Logística">Logística</option>
					<option value="Produção Têxtil">Produção Têxtil</option>
					<option value="Segurança da Informação">Segurança da Informação</option>
					<option value="Têxtil e Moda">Têxtil e Moda</option>
				</select>
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">
						<b>Orientador</b>
					</label>
				</div>
				<select class="custom-select" id="orientador" name="orientador">
					<option selected>Escolha...</option>
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

			<button type="submit" class="btn btn-success">
				<b>Cadastrar</b>
			</button>

		</form>

	</div>

</div>
<?php include("rodape.php")?>