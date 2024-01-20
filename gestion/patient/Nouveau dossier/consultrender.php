<?php

include("connection.php");
	$sql = $conn->query("SELECT * FROM appointement,patient where 
		appointement.id_patient = patient.id_patient");
				

				echo '<table>';
				while ($row = $sql->fetch_assoc()) {
					echo '<tr>';
						echo '<td>';
		 					echo $row['id_appointement'];
		 				echo '</td>';

		 				echo ' <td>';
		 					echo $row['name'];
		 				echo '</td>';

		 				echo ' <td>';
		 					echo $row['CIN'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['date'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['timeslot'];
		 				echo '</td>';

					echo '</tr>';
				}
				echo '</table>';
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;

		}
		h1{

		}
		header{
			width: 100%;
			height: 90px;
			background-color: #17c0eb;
		}
		span{
			color: #ffffff;}
		ul{
			width: auto;
			float: right;
			margin-top: 5px;

		}

		li{
			display: inline-block;
			padding: 15px 15px;
		}
		a{
			text-align: center;
			color: black;
			text-decoration: none;
			font-family: 'Open Sans',sans-serif;
			font-size: 20px;

		}
		a:hover{
			color: #F0c330;
			transition: 0.5s;
		} 
		h1{font-family: arial;}
	</style>
</head>
<header>
	<h1>Espace<span>Patient</span></h1>
		<nav>
		<ul> 
		
			<li><a href="profilP.php">Acceuil</a></li>
			<li><a href="bookapp.php">rendez-vous</a></li>
			<li><a href="consultrender.php">consulter rendez-vous</a></li>
			<li><a href="delappoint.php">annuler rendez-vous</a></li>
			<li><a href="">deconection</a></li>
			
		</ul>
	</nav>
</header>

<body>

	<form action="consultrender.php" method="POST">
		<fieldset>
	    <legend>id patient</legend>
	    <label for='id_patient'>
	      <input type="text" name="id_patient">
	    </label>
	    <input type="submit" name="delete">
	  </fieldset>
	</form>
	
</body>
</html>