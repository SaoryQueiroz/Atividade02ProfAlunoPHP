<?php
    try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "roote", "#bolinho@2603");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
    }

    require_once '../modelo/Professor.php';
	$professor = new Professor();
	$professor->setNome($_POST['nome']);
	$professor->setIdade($_POST['idade']);
	$professor->setCpf($_POST['cpf']);
	$professor->setSexo($_POST['sexo']);
	$professor->setSiape($_POST['ra']);
	try {
		$sql = "UPDATE professor SET nome = '" . $professor->getNome() . "', idade = '" . $professor->getIdade() . "', cpf = '" . $professor->getCpf() . "', sexo = '" . $professor->getSexo() . "' WHERE siape ='" . $professor->getSiape() . "'";

		$pdo->exec($sql);
		echo "<p>Professor atualizado com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

?>