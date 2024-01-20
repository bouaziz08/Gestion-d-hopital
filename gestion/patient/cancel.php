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
			<li><a href="searchdoctor.php ">Search Doctor</a></li>
			
			<li><a href="deconnection.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="cancel.php" class="form">


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="id_appointement" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>

	
<?php
	if (isset($_POST['id_appointement'])) {
			if (!empty($_POST['id_appointement'])) {
				
				$id_appointement = htmlspecialchars($_POST['id_appointement']);
				if (filter_var($id_appointement,FILTER_VALIDATE_INT)) {
					
					$delete =("DELETE FROM appointement WHERE id_appointement = '$id_appointement'");
					if(mysqli_query($conn,$delete)){ ?>
						<h2 class="thanks"> <?php printf("Your appointement Is delete",$conn->affected_rows);?></h2><?php
					}else{
						echo "<script>Invalid ID</script>";
					}

					}
		}
		echo "<script>Please enter the ID</script>";
	}


	?>




		
	</form>


</body>
</html>
