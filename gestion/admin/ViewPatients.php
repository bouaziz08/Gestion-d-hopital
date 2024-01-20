
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
			<label style="font-weight: bold;">CIN Patient</label>
		   	<input type="text" name="Patientsearch" class="xd">


		</div>

		<div class="input-group">
			<button type="submit" name="SearchPA" class="btnA">Search</button>
			
		</div>

	</form>
	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($conn,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patient WHERE CIN=('$Patientsearch')";
	$result2=mysqli_query($conn,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>
	<table class="table2">
		<tr>
		<th>Patient ID</th>
		<th>Name</th>
		<th>CIN</th>
		<th>gender</th>
		<th>Tel</th>

		</tr>
		<?php $query="SELECT id_patient,name,CIN,gender,tel FROM patient where CIN=('$Patientsearch')" ;
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>=1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_patient"]."</td><td>".$row["name"]."</td><td>".$row["CIN"]."</td><td>".$row["gender"]."</td><td>".$row['tel']."</td></tr>";
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

