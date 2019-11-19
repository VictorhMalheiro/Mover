<?php
	try{
		// $conn = new PDO("mysql:host=alu-casa.mysql.uhserver.com;dbname=alu_casa","filipecamillo","inter2019*");
		$conn = new PDO("mysql:host=localhost;dbname=alu_casa","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>