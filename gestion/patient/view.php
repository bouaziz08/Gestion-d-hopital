<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<style>
.hhh {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #3867d6;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin: 10px 10px 10px 10px;
}

.hhh:hover {background-color: #3867d6}

.hhh:active {
  background-color: #74b9ff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<header>
	<h1>Espace<span>Patient</span></h1>
		<nav>

		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" down1.php">Download</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			
			<li><a href="deconnection.php">Logout</a></li>
			

		</ul>
		

	</nav>

</header>

<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">


		<div class="input-group">
			<label style="font-weight: bold;">CIN</label>
		   	<input type="text" name="Patientsearch" class="xd">


		</div>

		<div class="input-group">
			<button type="submit" name="SearchPA" class="btn">Search</button>
		</div>

	</form>
	<?php  


	if(isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($conn,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patient WHERE CIN=('$Patientsearch')";
	$result2=mysqli_query($conn,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>
	<table class="table2">
		<tr>
		<th>appointement ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Doctor Name</th>
		<th>Patient ID</th>
		<th>name</th>
		<th>CIN</th>

		</tr>
		<?php $query="SELECT * FROM appointement WHERE CIN=('$Patientsearch')";
		$result3=mysqli_query($conn,$query);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["id_appointement"]."</td><td>".$row3["date"]."</td><td>".$row3["timeslot"]."</td><td>".$row3["name_doctor"]."</td><td>".$row3['id_patient']."</td><td>".$row3['name']."</td><td>".$row3['CIN']."</td></tr>";
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

