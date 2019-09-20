<html>
	<head>
		<title>Atividade 02 de Web 2</title>
		<meta charset="UTF-8"/>
		<!-- Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
		crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class= "row">
				<?php include("../layout/cabecalho.html"); ?>
			</div>

			<div class="row">
				<div class = "col-md-3 col-sm12">
					<?php include("../layout/menu.html") ?>
				</div>
				
				<div class = "col-md-9">
					<form action="../repositorio/UpdateProfessor.php" method="POST">
						<h6> Entre com as informações do aluno para atualizar </h6>
						<label>Nome: </label><input class="form-control" type="text" name="nome" id="nomeID"/>
						<label>Idade: </label><input class="form-control" type="text" name="idade" id="idadeID"/>
						<label> CPF: </label> <input class = "form-control" type="text" name="cpf" id="cpfID"/>
						<label> SIAPE do professor para atualizar: </label><input class="form-control" type="text" name="ra" id="raID"/>
						<label> Sexo: </label><input class = "form-control" type = "text" name = "sexo" id = "sexoID"/>

						<input class="btn btn-primary" type="submit" value="Salvar" />
						<input class = "btn btn-primary" type = "reset" value = "Limpar"/>
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>