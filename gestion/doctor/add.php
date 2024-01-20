<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Espace<span>Doctor</span></h1>
		<nav>
		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href="listnurse.php">liste of nurse</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="press.php">download</a></li>
			<li><a href="deconnection.php">Logout</a></li>

		</ul>
		
	</nav>

</header>

<form method="post" action="add.php" class="add">

	<form action="" method="post">


	<div class="input-group">
		<label style="font-weight: bold;">PatientID</label>
	   	<input type="text" name="Patientsearch" class="xd">


	</div>

	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">Search</button>
	</div>

		
	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($conn,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patient WHERE id_patient=('$Patientsearch')";
	$result2=mysqli_query($conn,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>
	<div class="input-group">
		<label>patient ID</label>
		<input type="text" name="id_patient" value="<?php echo $row2['id_patient']; ?>">
	</div>
	<div class="input-group">
		<label>Doctor</label>
		<input type="text" name="name_doctor" >

	</div>
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $row2['name']; ?>">

	</div>

	<div class="input-group">
		<label>Date</label>
		<input type="date" name="dateconsultation">
	</div>

	<div class="input-group-add">
		<label>diagnostique</label>
		<textarea type="text" name="diagnostique" rows="10" cols="60"></textarea>
		
	</div>


	<div class="input-group">
		<button type="submit" name="AddD" class="btn">Add</button>
	</div>


	<?php  

	}
	 ?>

	</div>
	
	  
<?php 
}
	    ?>

	    <?php  


if (isset($_POST['AddD'])) {

	$id_patient = htmlspecialchars($_POST['id_patient']);
	$dateconsultation = htmlspecialchars($_POST['dateconsultation']);
	$diagnostique = htmlspecialchars($_POST['diagnostique']);
	$name = htmlspecialchars($_POST['name']);
	$name_doctor = htmlspecialchars($_POST['name_doctor']);

	$sql7 = "INSERT INTO  dossiermedicale (id_patient,dateconsultation,diagnostique,name,name_doctor) VALUES ('$id_patient','$dateconsultation','$diagnostique','$name','$name_doctor') ";
	if ($conn -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",$conn->affected_rows);?></h2>
			
			
		<?php 



	}

}

?>


</form>
<!--form action="down.php" method="POST">
		<input type="submit" name="make" class="btn btn-success" value="Generate">

</form-->
</body>

</html>