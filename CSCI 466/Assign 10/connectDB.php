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
	
	if($pdo)
		echo 'Connection Successful';
?>
