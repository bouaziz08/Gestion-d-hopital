<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Espace<span>Patient</span></h1>
		<nav>
		
		<ul> 

			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" down1.php">Download</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="searchdoctor.php">Search Doctor</a></li>
			<li><a href="deconnection.php">Logout</a></li>
			

		</ul>
		
	</nav>
	
</header>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">


	<div class="input-group">
		<label style="font-weight: bold;" class="input-field">Specialite</label>
        <select name="specialite" class="input-group">
        	<option>Enter the specialite</option>
			<option value="Generalist" >Generalist</option>
	   		<option value="neurology">neurology</option>
	   		<option value="Cardiology">Cardiology</option>
	   		<option value="Cardiology">Dermatology</option>
	   		<option value="Urology">Urology</option>
	   		<option value="Traumatology">Traumatology</option>                      
		</select>
	</div>

	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">Search</button>
	</div>

</form>
	<?php
		if (isset($_POST['SearchPA'])) {
			$specialite = mysqli_real_escape_string($conn,$_POST['specialite']);
			$spe = "SELECT id_doctor,name_doctor,specialite,gender,tel FROM doctor WHERE specialite=('$specialite')" ;
			$result = mysqli_query($conn,$spe);

		while ($row1 = mysqli_fetch_assoc($result)) {
			
	?>
	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>NAME</th>
		<th>Specialite</th>
		<th>Gender</th>
		<th>Phone number</th>
		
		

		</tr>
		<?php $sql="SELECT id_doctor,name_doctor,specialite,gender,tel FROM doctor WHERE specialite=('$specialite')" ;
		$result=$conn->query($sql);
		if(mysqli_num_rows($result)>= 1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_doctor"]."</td><td>".$row["name_doctor"]."</td><td>".$row["specialite"]."</td><td>".$row["gender"]."</td><td>".$row['tel']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>
<?php }
}
?>
