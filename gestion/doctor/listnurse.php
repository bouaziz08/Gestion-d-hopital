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
	<!--h1 class="my1">My<span class="mys">Appointments</span></h1-->

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="add">


		<div class="input-group">
			<label style="font-weight: bold;">Specialite</label>
		   	<select name="specialite" class="input-group">
	        	<option>Enter the specialite</option>
				<option value="Anesthetist" >Anesthetist</option>
		   		<option value="Psychiatric">Psychiatric</option>
		   		<option value="Cardiac">Cardiac</option>
		   		<option value="Pediatric">Pediatric</option>
		   		<option value="Surgery">Surgery</option>                     
			</select>
		</div>

		<div class="input-group">
			<label style="font-weight: bold;">Work day</label>
		   	<select name="days" class="input-group">
	        	<option>Enter the days</option>
				<option>Monday to wednesday</option>
				<option>Thursday to saturday</option>                      
			</select>
		</div>

		<div class="input-group">
			<button type="submit" name="nursearch" class="btn">Search</button>
		</div>
	</form>

	<?php
		if (isset($_POST['nursearch'])) {
			$specialite = mysqli_real_escape_string($conn,$_POST['specialite']);
			$days = mysqli_real_escape_string($conn,$_POST['days']);
			$spe = "SELECT id_nurse,name,specialite,gender,tel,workday FROM nurse WHERE specialite=('$specialite') AND workday=('$days')" ;
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
		<?php $sql="SELECT id_nurse,name,specialite,gender,tel,workday FROM nurse WHERE specialite=('$specialite') AND workday=('$days')" ;
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
