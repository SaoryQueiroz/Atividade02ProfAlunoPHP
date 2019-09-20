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
	$professor->setSiape($_POST['siape']);
	$professor->setSexo($_POST['sexo']);

	try {
		$sql = "INSERT INTO professor (nome, idade, cpf, siape, sexo) VALUES 
			('" . $professor->getNome() . "', '" . $professor->getIdade() . "', '" . $professor->getCpf() . "', '" . $professor->getSiape() ."', '" . $professor->getSexo() ."')";

		$pdo->exec($sql);
		echo "<p>Inserido com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
?>