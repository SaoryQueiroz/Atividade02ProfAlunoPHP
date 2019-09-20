<?php
    try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "roote", "#bolinho@2603");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
    }

    require_once '../modelo/Aluno.php';
    $aluno = new Aluno();
	$aluno->setNome($_POST['nome']);
	$aluno->setIdade($_POST['idade']);
	$aluno->setCpf($_POST['cpf']);
	$aluno->setSexo($_POST['sexo']);
    $aluno->setRa($_POST['ra']);
    
    try{
        $sql = "UPDATE aluno set nome = '" . $aluno->getNome() . "', idade = '" . $aluno->getIdade() . "', cpf = '" . $aluno->getCpf() . "', sexo = '" . $aluno->getSexo() . "' WHERE ra ='" . $aluno->getRa() . "'";

        $pdo->exec($sql);
		echo "<p>Aluno atualizado com sucesso.</p>";
    }catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}
?>