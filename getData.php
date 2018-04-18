<?php 
	if(!empty($_POST)){
		$name = $_POST["pulso"];
		
		$sql = "INSERT INTO pulso(pulso) VALUES (:pulso)";
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'pulso'=>$pulso;
		]);
		var_dump($result);
	}

 ?>