<?php

include("connection.php");
	if (isset($_POST['name_doctor']) && isset($_POST['CIN']) && isset($_POST['specialite']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['tel']) && isset($_POST['email'])) {
		if (!empty($_POST['name_doctor']) && !empty($_POST['CIN']) && !empty($_POST['specialite']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['tel']) && !empty($_POST['email'])) {
			
			$name_doctor = htmlspecialchars($_POST['name_doctor']);
			$CIN = htmlspecialchars($_POST['CIN']);
			$password = htmlspecialchars($_POST['password']);
			$specialite = htmlspecialchars($_POST['specialite']);
			$gender = htmlspecialchars($_POST['gender']);
			$age = htmlspecialchars($_POST['age']);
			$tel = htmlspecialchars($_POST['tel']);
			$email = htmlspecialchars($_POST['email']);
			


			$add = "INSERT INTO doctor(name_doctor,CIN,password,specialite,gender,age,tel,email) VALUES('$name_doctor','$CIN', '$password','$specialite','$gender','$age','$tel','$email')";
			mysqli_query($conn,$add);
			
		
		}
	}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Espace<span>Admin</span></h1>
		<nav>
	
		<ul> 
			
			<li><a href="index3.php">MyInfo</a></li>
			<li><a href="addoctor.php">Add/delete Doctor</a></li>
			<li><a href="addnurse.php">Add/delete Nurse</a></li>
			<li><a href="viewdoctor.php">View doctor</a></li>
			<li><a href="viewPatients.php">View Patient</a></li>
			<li><a href="listnurse.php">View Nurse</a></li>
			<li><a href="viewappointement.php">View appointement</a></li>
			<li><a href="deconnection.php">Logout</a></li>

	
		</ul>
	
	</nav>

</header>
<body>

<div class="headerA">
	<h2>Add Doctor</h2>
</div>

<form method="post" action="addoctor.php">


	<div class="input-groupA">
		<label>Doctor Name</label>
		<input type="text" name="name_doctor" >


	</div>

	<div class="input-groupA">
		<label>CIN</label>
		<input type="text" name="CIN">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="password" name="password">

	</div>

	<div class="input-groupA">
	<label>Specialite</label>
	   	<select name="specialite" class="xd">
	   		<option value="Generalist" >Generalist</option>
	   		<option value="neurology">neurology</option>
	   		<option value="Cardiology">Cardiology</option>
	   		<option value="Cardiology">Dermatology</option>
	   		<option value="Urology">Urology</option>
	   		<option value="Traumatology">Traumatology</option>
	   	</select>
    </div>

    <div class="input-groupA">
		<label>gender</label>
		<input type="text" name="gender">


	</div>

	<div class="input-groupA">
		<label>Age</label>
		<input type="text" name="age">


	</div>
	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="tel">


	</div>


	<div class="input-groupA">
		<label>Email</label>
		<input type="text" name="email">

	</div>


	<div class="input-groupA">
		<button type="submit" class="btnA" value="Envoyer">Add Doctor</button>
	</div>


	




</form>
<?php include("connection.php"); ?>

<?php
	if (isset($_POST['id_doctor'])) {
			if (!empty($_POST['id_doctor'])) {
				
				$id_doctor = htmlspecialchars($_POST['id_doctor']);
				if (filter_var($id_doctor,FILTER_VALIDATE_INT)) {
					
					$delete =("DELETE FROM doctor WHERE id_doctor = '$id_doctor'");
					mysqli_query($conn,$delete);

					}
		}
	}


	?>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="addoctor.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="id_doctor" >

	</div>

	<div class="input-groupA">
		<button type="submit" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>