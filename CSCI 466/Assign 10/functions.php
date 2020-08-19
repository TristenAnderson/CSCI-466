<?php

	function getSuppliers($pdo) {
		//get supplier table from DB
		echo '<p>';
		$sql = "SELECT * from S;";
		$result = $pdo->query($sql);
		$allrows = $result->fetchAll();
		$rows = count($allrows);	
		//print out table of suppliers
		echo '<table border=1>';
		echo "<th>SID</th>";
		echo "<th>SNAME</th>";
		echo "<th>STATUS</th>";
		echo "<th>CITY</th>";
		for ($i=0; $i < $rows; $i++) {
			echo '<tr align=center>'; 
			for ($j=0; $j < 4; $j++) {
				echo '<td>' . $allrows[$i][$j] . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		echo '</p>';
	}

	function getParts($pdo) {
		$sql = "SELECT * from P;";
		$result = $pdo->query($sql);
		$allrows = $result->fetchAll();
		$rows = count($allrows);	
		//print out table of suppliers
		echo '<table border=1>';
		echo "<th>PID</th>";
		echo "<th>PNAME</th>";
		echo "<th>COLOR</th>";
		echo "<th>WEIGHT</th>";
		for ($i=0; $i < $rows; $i++) {
			echo '<tr align=center border=1>'; 
			for ($j=0; $j < 4; $j++) {
				echo '<td>' . $allrows[$i][$j] . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}

	function addPart($pdo) {
		$sql = "";
	}

	function addSupplier($pdo) {
			$sql = "";
	}

?>
