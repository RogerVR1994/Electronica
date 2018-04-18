<?php 
	$dbHost = "localhost";
	$dbName = "electronica";
	$dbUser = "root";
	$dbPassword = "Ro9311o/";
	try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

?>