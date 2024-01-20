<?php
	
include("connection.php");
	if (isset($_POST['name_doctor']) && isset($_POST['CIN']) && isset($_POST['specialite']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['tel']) && isset($_POST['email'])) {
		if (!empty($_POST['name_doctor']) && !empty($_POST['CIN']) && !empty($_POST['specialite']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['tel']) && !empty($_POST['email'])) {
			
			$name_doctor = htmlspecialchars($_POST['name_doctor']);
			$CIN = htmlspecialchars($_POST['CIN']);
			$specialite = htmlspecialchars($_POST['specialite']);
			$password = htmlspecialchars($_POST['password']);
			$gender = htmlspecialchars($_POST['gender']);
			$age = htmlspecialchars($_POST['age']);
			$tel = htmlspecialchars($_POST['tel']);
			$email = htmlspecialchars($_POST['email']);
			


			$add = ("INSERT INTO doctor(name_doctor,CIN,specialite,password,gender,age,tel,email) VALUES('$name_doctor','$CIN', '$specialite','$password','$gender','$age','$tel','$email')");
			mysqli_query($conn,$add);
			
		
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
	<form action="addeldoctor.php" method="POST" name="form1" onsubmit="return validation()">
  		<fieldset>
    		<legend>validation doctor</legend>
     		 <label for="name_doctor">complet Name :</label><br>
     		 <input type="text" name="name_doctor" placeholder="Enter your name?"><br><br>
     		 <label for='CIN'>CIN :</label><br>
     		 <input type="text" name="CIN"><br><br>
     		 <label for='specialite'>specialite :</label><br>
     		 <input type="text" name="specialite"><br><br>
     		 <label for="password">Password :</label><br>
		     <input type="Password" name="password"><br><br>
     		 <label for="gender">Gender :</label><br>
     		 <select id="gender" name="gender">
      		  <option value="female">female</option>
      		  <option value="male">male</option>
     		 </select><br><br>
     		 <label for="age">age :</label><br>
		      <input type="text" name="age"><br><br>
		      <label for="tel">phone number :</label><br>
		      <input type="text" name="tel"><br><br>
		      <label for="email">Email :</label><br>
		      <input type="text" name="email"><br><br>
		      
      		  <input type="submit" value="Envoyer">
 		</fieldset>
	</form>
</body>
</html>