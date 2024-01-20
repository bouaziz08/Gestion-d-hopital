<?php 

session_start();

if(!isset($_SESSION['loginuser'])){
	header('location:loginP.php');
}else{
	
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
			<li><a href="loginP.php">deconnection</a></li>
			
		</ul>
	</nav>
</header>

<body>
	
<?php
	
	include("connection.php");
	$CIN = $_SESSION['loginuser'];
	$infouser = "SELECT * FROM patient WHERE CIN = '$CIN'";
	$result = mysqli_query($conn,$infouser);
	if (!$result) {
		echo "Error:".mysqli_error($conn);
	}
	$row = mysqli_fetch_array($result);
	
	$id_patient = $row["id_patient"];
	$name = $row["name"];
	$CIN = $row["CIN"];
	$gender = $row["gender"];
	$age = $row["age"];
	$tel = $row["tel"];
	$email = $row["email"];
		
		

?>
	

	<label>id_patient:</label>
	<?php echo $id_patient ?><br><br>
	<label>Complet name:</label>
	<?php echo $name ?><br><br>
	<label>CIN:</label>
	<?php echo $CIN ?><br><br>
	<label>gender:</label>
	<?php echo $gender ?><br><br>
	<label>age:</label>
	<?php echo $age ?><br><br>
	<label>tel:</label>
	<?php echo $tel ?><br><br>
	<label>email:</label>
	<?php echo $email ?><br><br>
	


	<!--div>
	<a href=""><button class="b1" style="vertical-align:middle">Facture</button></a>
	<a href=""><button class="b2" style="vertical-align:middle">certificate</button></a>
	<a href=""><button class="b3" style="vertical-align:middle">view appointement</button></a>
	<a href=""><button class="b4" style="vertical-align:middle">book appointement</button></a>
	</div-->
	


</body>
</html>
<?php  } ?>