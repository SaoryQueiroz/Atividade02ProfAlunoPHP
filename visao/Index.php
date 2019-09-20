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
			<div class = "row">
				<?php include("../layout/cabecalho.html"); ?>
			</div>
			<div class="row">
				<div class = "col-md-3 col -sm-12">
					<?php include("../layout/menu.html") ?>
				</div>

				<div class="col-md-9">
					<h3>Bem vindo ao sistema de cadastro de alunos e professores</h3>
					<h5 align="center"> Busque e selecione no menu a opção desejada</h5>
				</div>
			</div>
			<?php include("../layout/rodape.html"); ?>
		</div>	
	</body>
</html>