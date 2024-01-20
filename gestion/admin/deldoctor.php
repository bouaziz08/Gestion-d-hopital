
<?php
include("connection.php");
if (isset($_POST['id_doctor'])) {
			if (!empty($_POST['id_doctor'])) {
				
				$id_doctor = htmlspecialchars($_POST['id_doctor']);

				if (filter_var($id_doctor,FILTER_VALIDATE_INT)) {
					
					$delete =("DELETE FROM doctor WHERE id_doctor = '$id_doctor'");
					mysqli_query($conn,$delete);;

					echo 'delete successfully';
				}else{
					echo 'delete failed';
				}

			}
		}
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
			<li><a href="">liste rendez-vous</a></li>
			<li><a href="loginad.php">deconnection</a></li>
			
		</ul>
	</nav>
</header>
<body>
	<form action="deldoctor.php" method="POST">
		<fieldset>
	    <legend>Delete doctor</legend>
	    <label for='id_doctor'>
	      <input type="text" name="id_doctor">
	    </label>
	    <input type="submit" name="delete">
	  </fieldset>
	</form>

</body>
</html>		