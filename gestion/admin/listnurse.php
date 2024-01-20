<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Espace<span>Doctor</span></h1>
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
	<!--h1 class="my1">My<span class="mys">Appointments</span></h1-->

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="add">


		<div class="input-groupA">
			<label style="font-weight: bold;">Specialite</label>
		   	<select name="specialite" class="input-groupA">
	        	<option>Enter the specialite</option>
				<option value="Anesthetist" >Anesthetist</option>
	   		<option value="Psychiatric">Psychiatric</option>
	   		<option value="Cardiac">Cardiac</option>
	   		<option value="Pediatric">Pediatric</option>
	   		<option value="Surgery">Surgery</option>                      
			</select>
		</div>

		

		<div class="input-groupA">
			<button type="submit" name="nursearch" class="btnA">Search</button>
		</div>
	</form>

	<?php
		if (isset($_POST['nursearch'])) {
			$specialite = mysqli_real_escape_string($conn,$_POST['specialite']);
			
			$spe = "SELECT id_nurse,name,specialite,gender,tel,workday FROM nurse WHERE specialite=('$specialite')" ;
			$result = mysqli_query($conn,$spe);

		while ($row1 = mysqli_fetch_assoc($result)) {
			
	?>
	<table class="table2">
		<tr>
		<th>Nurse ID</th>
		<th>NAME</th>
		<th>Specialite</th>
		<th>Gender</th>
		<th>Phone number</th>
		<th>Work day</th>
		

		</tr>
		<?php $sql="SELECT id_nurse,name,specialite,gender,tel,workday FROM nurse WHERE specialite=('$specialite')" ;
		$result=$conn->query($sql);
		if(mysqli_num_rows($result)>= 1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_nurse"]."</td><td>".$row["name"]."</td><td>".$row["specialite"]."</td><td>".$row["gender"]."</td><td>".$row['tel']."</td><td>".$row["workday"]."</td></tr>";
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
