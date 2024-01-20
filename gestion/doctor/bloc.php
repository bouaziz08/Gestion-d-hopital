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
			<li><a href=" bloc.php">liste of bloc</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="deconnection.php">Logout</a></li>
		</ul>
	
	</nav>
</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Bloc ID</th>
		<th>NAME</th>
		

		</tr>
		<?php $sql="SELECT id_bloc,name FROM bloc WHERE etat = ('') " ;
		$result=$conn->query($sql);
		if(mysqli_num_rows($result)>= 1){
			while ($row=$result->fetch_assoc()) {

				echo "<tr><td>".$row["id_bloc"]."</td><td>".$row["name"]."</td><tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

