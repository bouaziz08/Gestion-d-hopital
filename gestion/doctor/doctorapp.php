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
			<li><a href=" listnurse.php">liste of nurse</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="deconnection.php">Logout</a></li>

		</ul>
		
	</nav>

</header>

<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="add">


		<div class="input-group">
			<label style="font-weight: bold;">Doctor name</label>
		   	<input type="text" name="docsearch" class="xd">


		</div>

		<div class="input-group">
			<button type="submit" name="SearchPA" class="btn">Search</button>
		</div>
	</form>
		<?php  


	  if (isset($_POST['SearchPA'])) {

	$docsearch = mysqli_real_escape_string($conn,$_POST['docsearch']);
	
	$query="SELECT * FROM doctor WHERE name_doctor=('$docsearch')";
	$result2=mysqli_query($conn,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>
	<table class="table2">

		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>doctorName</th>
		

		</tr>
		<?php 
		$day = date('Y-m-d');
		$sql="SELECT * FROM appointement WHERE name_doctor = ('$docsearch') AND date > ('$day')"  ;
		$result=$conn->query($sql);
		if(mysqli_num_rows($result)>= 1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_appointement"]."</td><td>".$row["date"]."</td><td>".$row["timeslot"]."</td><td>".$row["id_patient"]."</td><td>".$row['name']."</td><td>".$row["name_doctor"]."</td></tr>";
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
