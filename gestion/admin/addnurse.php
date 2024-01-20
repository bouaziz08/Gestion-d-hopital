<?php

include("connection.php");
	if (isset($_POST['name']) && isset($_POST['CIN']) && isset($_POST['specialite']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['workday'])) {
				
			$name = htmlspecialchars($_POST['name']);
			$CIN = htmlspecialchars($_POST['CIN']);
			$password = htmlspecialchars($_POST['password']);
			$specialite = htmlspecialchars($_POST['specialite']);
			$gender = htmlspecialchars($_POST['gender']);
			$age = htmlspecialchars($_POST['age']);
			$tel = htmlspecialchars($_POST['tel']);
			$email = htmlspecialchars($_POST['email']);
			$workday = htmlspecialchars($_POST['workday']);
			


			$add = "INSERT INTO nurse (name,CIN,password,specialite,gender,age,tel,email,workday) VALUES('$name','$CIN', '$password','$specialite','$gender','$age','$tel','$email','$workday')";
			mysqli_query($conn,$add);
			
		
		
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
			<li><a href="ViewPatients.php">View Patient</a></li>
			<li><a href="listnurse.php">View Nurse</a></li>
			<li><a href="viewappointments.php">View appointement</a></li>
			<li><a href="deconnection.php">Logout</a></li>

	
		</ul>
	
	</nav>

</header>
<body>

		<div class="headerA">
	<h2>Add Nurse</h2>
</div>

<form method="post" action="addnurse.php">


	<div class="input-groupA">
		<label>Nurse Name</label>
		<input type="text" name="name" >


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
	   		<option value="Anesthetist" >Anesthetist</option>
	   		<option value="Psychiatric">Psychiatric</option>
	   		<option value="Cardiac">Cardiac</option>
	   		<option value="Pediatric">Pediatric</option>
	   		<option value="Surgery">Surgery</option>
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
		<label>Work day</label>
		<select name="workday" class="xd">
	   		<option value="Monday to wednesday" >Monday to wednesday</option>
	   		<option value="Thursday to saturday">Thursday to saturday</option>
	   	</select>

	</div>


	<div class="input-groupA">
		<button type="submit" class="btnA" value="Envoyer">Add Nurse</button>
	</div>


	




</form>
<?php include("connection.php"); ?>

<?php
	if (isset($_POST['id_nurse'])) {
			if (!empty($_POST['id_nurse'])) {
				
				$id_nurse = htmlspecialchars($_POST['id_nurse']);
				if (filter_var($id_nurse,FILTER_VALIDATE_INT)) {
					
					$delete =("DELETE FROM nurse WHERE id_nurse = '$id_nurse'");
					mysqli_query($conn,$delete);

					}
		}
	}


	?>
	<div class="headerAD">
	<h2>Delete Nurse</h2>
</div>

<form method="post" action="addnurse.php" class="delete">

	<div class="input-groupA">
		<label>Nurse ID</label>
		<input type="text" name="id_nurse" >

	</div>

	<div class="input-groupA">
		<button type="submit" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>