<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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
			background-color:  #1dd1a1;
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
	<h1>Espace<span>admin</span></h1>
		<nav>
		<ul> 
		
			<li><a href="profilad.php">Acceuil</a></li>
			<li><a href="addeldoctor.php">ajouter Docteur</a></li>
			<li><a href="deldoctor.php">supprimer Docteur</a></li>
			<li><a href="ViewPatients.php">liste Patients</a></li>
			<li><a href="listrend.php">liste rendez-vous</a></li>
			<li><a href="loginad.php">deconnection</a></li>
			
		</ul>
	</nav>
</header>
<body>
	<?php
	$sql = $conn->query("SELECT * FROM appointement");
				

				echo '<table>';
				while ($row = $sql->fetch_assoc()) {
					echo '<tr>';
						echo '<td>';
		 					echo $row['id_appointement'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['name'];
		 				echo '</td>';

		 				echo '<td>';
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
</body>
</html>	