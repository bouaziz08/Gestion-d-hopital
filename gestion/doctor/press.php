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
			<li><a href="press.php">download</a></li>
			<li><a href="deconnection.php">Logout</a></li>

		</ul>
		
	</nav>

</header>

<body>
	
	<form action="down.php" method="post" class="add">


		<div class="input-group">
			<label style="font-weight: bold;">ID patient</label>
		   	<input type="text" name="id_patient" class="xd">


		</div>

		<div class="input-group">
			<button type="submit" name="press" class="btn">Search</button>
		</div>
	</form>


</body>
</html>


