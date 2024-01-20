
<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

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
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">


		<div class="input-groupA">
			<label style="font-weight: bold;">CIN Doctor</label>
		   	<input type="text" name="Patientsearch" class="xd">


		</div>

		<div class="input-groupA">
			<button type="submit" name="SearchPA" class="btnA">Search</button>
			
		</div>

	</form>
	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($conn,$_POST['Patientsearch']);
	
	$query="SELECT * FROM doctor WHERE CIN=('$Patientsearch')";
	$result2=mysqli_query($conn,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>
	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>Name</th>
		<th>CIN</th>
		<th>Specialite</th>
		<th>gender</th>
		<th>Tel</th>
		<th>Email</th>

		</tr>
		<?php $query="SELECT id_doctor,name_doctor,CIN,specialite,gender,tel,email FROM doctor where CIN=('$Patientsearch')" ;
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>=1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_doctor"]."</td><td>".$row["name_doctor"]."</td><td>".$row["CIN"]."</td><td>".$row["specialite"]."</td><td>".$row['gender']."</td><td>".$row["tel"]."</td><td>".$row["email"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table><br><br>
	
		


</body>
</html>

<?php } 
}
?>

