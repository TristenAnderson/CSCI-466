
<html>
	
	<head>
		<title> Tristen Anderson, z1820036 </title>
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
	
		<h1> CSCI 466 Assignment 8 </h1>
		
		<img src="https://www.w3schools.com/images/w3schools_green.jpg">

		<p> Did you ever hear the tragedy of Darth Plagueis the wise? </p>

		<p> I thought not. It's not a story the Jedi would tell you. It's a Sith legend. Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life... He had such a knowledge of the dark side that he could even keep the ones he cared about from dying. The dark side of the Force is a pathway to many abilities some consider to be unnatural. He became so powerful... the only thing he was afraid of was losing his power, which eventually, of course, he did. Unfortunately, he taught his apprentice everything he knew, then his apprentice killed him in his sleep. It's ironic he could save others from death, but not himself. </p>

		<ol>
			<li>Sushi</li>
			<li>Steak</li>
			<li>Pizza</li>
			<li>Brisket</li>
			<li>Chicken</li>
			<li>Bacon</li>
			<li>Cheese Burgers</li>
			<li>Ice Cream</li>
			<li>Cookies</li>
			<li>Lasagna</li>
		</ol>

		<?php
			echo "<table border='1' >";
			for ($i=1; $i < 6; $i++) {
				echo "<tr>";
				for ($j = 1; $j < 6; $j++) {
					echo "<td>" . $i*$j . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>	

		<div>	
			<form action="http://students.cs.niu.edu/~z035690/asnsubmit.php" method="post">
                                <input type="text" name="banana" > 
				<br/> Carbohydrates:
				<input type="checkbox" name="macros" value="Carbohydrates"> Fat
				<input type="checkbox" name="macros" value="Fat"> Protien
				<input type="checkbox" name="macros" value="Protien"> <br />
				<input type="radio" name="abc" value='A'checked> A
				<input type="radio" name="abc" value='B'> B
				<input type="radio" name="abc" value='C'> C
				<input type="hidden" name="zid" value="z1820036" >
				<input type="submit" value="Make it so">
			</form>
		</div>

	</body>

</html>
