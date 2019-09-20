<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=web2", "roote", "#bolinho@2603");
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }

    require_once '../modelo/Aluno.php';
    $aluno = new Aluno();
    $aluno->setRa($_POST['ra']);

    try{
        $sql = "DELETE FROM aluno where ra = ('" . $aluno->getRa() . "')";
        $pdo->exec($sql);
        echo "<p> Aluno deletado com sucesso</p>";
    }catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

?>