
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
			background-color:  #17c0eb;
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
	<form action="delappoint.php" method="POST">
		<fieldset>
	    <legend>Delete appointement</legend>
	    <label for='id_appointement'>
	      <input type="text" name="id_appointement">
	    </label>
	    <input type="submit" name="delete">
	  </fieldset>
	</form>
	<?php
	if (isset($_POST['id_appointement'])) {
			if (!empty($_POST['id_appointement'])) {
				
				$id_appointement = htmlspecialchars($_POST['id_appointement']);
				if (filter_var($id_appointement,FILTER_VALIDATE_INT)) {
					
					$delete =("DELETE FROM appointement WHERE id_appointement = '$id_appointement'");
					if(mysqli_query($conn,$delete)){
						echo 'delete successfully';
					}else{
						echo 'delete failed';
					}

					}
		}


	?>
</body>
</html>	
<?php } ?>	