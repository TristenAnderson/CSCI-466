<?php
	$username = 'z1820036';
	$password = '';
	try { // if something goes wrong, an exception is thrown
		$dsn = "mysql:host=courses;dbname=z1820036";
		$pdo = new PDO($dsn, $username, $password);
	}
	catch(PDOexception $e) { // handle that exception
		echo "Connection to database failed: " . $e->getMessage();
	}
	
	echo "Connection Successful";
	$sql = "SELECT * from Parts;";
	$result = $pdo->query($sql);
	$allrows = $result->fetchAll();
	
	print_r($allrows);
	
	$sql = "SELECT * from Suppliers;";
		$result = $pdo->query($sql);
		$allrows = $result->fetchAll();
		print_r($allrows);
		$rows = count($allrows);	
		//print out table of suppliers
		echo '<table>';
		for ($i=0; $i < $rows; $i++) {
			echo '<tr>'; 
			for ($j=0; $j < 4; $j++) {
				echo '<td>' . $allrows[$i][$j] . '</td>';
			}
			echo '</tr>';
		}
?>
