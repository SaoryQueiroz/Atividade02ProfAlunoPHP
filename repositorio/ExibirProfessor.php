<?php
     try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "roote", "#bolinho@2603");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
    }

    require_once '../modelo/Professor.php';
    $professor = new Professor();
    $professor->setSiape($_POST['siape']);

    if($professor->getSiape() == ""){
        try{
            $sql = "SELECT * from professor";
            $tamanho = $pdo->query($sql);

            echo "<p> Professor selecionado com sucesso!</p>";
            if($tamanho->rowCount() > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome</th>";
                echo "<th> Idade</th>";
                echo "<th> Cpf</th>";
                echo "<th> Sexo</th>";
                echo "<th> SIAPE</th>";
                echo "</tr>";
                while ($row = $tamanho->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['idade'] . "</td>";
                    echo "<td>" . $row['cpf'] . "</td>";
                    echo "<td>" . $row['sexo'] . "</td>";
                    echo "<td>" . $row['siape'] . "</td>";
			    }
            }
        }catch(PDOException $e) {
            die("Não foi possível executar o script: $sql. " . $e->getMessage());		
        }
    }else {
		try {
		$sql = "SELECT * FROM professor WHERE siape = ('" . $professor->getSiape() . "')";
        $tamanho = $pdo->query($sql);
        
        echo "<p>Selecionado com sucesso.</p>";
		if ($tamanho->rowCount() > 0) {

			echo "<table>";
			echo "<tr>";
			echo "<th> Nome</th>";
			echo "<th> Idade</th>";
			echo "<th> Cpf</th>";
			echo "<th> Sexo</th>";
			echo "<th> SIAPE</th>";
			echo "</tr>";
			while ($row = $tamanho->fetch()) {
				echo "<tr>";
				echo "<td>" . $row['nome'] . "</td>";
				echo "<td>" . $row['idade'] . "</td>";
				echo "<td>" . $row['cpf'] . "</td>";
				echo "<td>" . $row['sexo'] . "</td>";
				echo "<td>" . $row['siape'] . "</td>";
			}
		}
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}
	}
?>