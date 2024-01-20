<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #55efc4;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #55efc4}

.button:active {
  background-color: #55efc4;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
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
		<?php
		$day = date('Y-m-d');
		 $query="SELECT * FROM appointement WHERE date > ('$day')";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>=1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_appointement"]."</td><td>".$row["date"]."</td><td>".$row["timeslot"]."</td><td>".$row["name_doctor"]."</td><td>".$row['id_patient']."</td><td>".$row['name']."</td><td>".$row['CIN']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table><br><br>
	<button class="button"><a href="book.php">Book</a></button>
	
		


</body>
</html>

<?php 

?>

