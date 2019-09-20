<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=web2", "roote", "#bolinho@2603");
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }

    require_once '../modelo/Professor.php';
	$professor = new Professor();
	$professor->setSiape($_POST['siape']);
	try {
		$sql = "DELETE from professor where	siape = ('" . $professor->getSiape() . "')";

		$pdo->exec($sql);
		echo "<p>Professor deletado com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

?>