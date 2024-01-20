<?php 

session_start();

if(!isset($_SESSION['loginadm'])){
	header('location:loginad.php');
}else{
	
?>
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
		
		<ul > 
		
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
<body >

<?php
	
	include("connection.php");
	$CIN = $_SESSION['loginadm'];
	$infoad = "SELECT * FROM admin WHERE CIN = '$CIN'";
	$result = mysqli_query($conn,$infoad);
	if (!$result) {
		echo "Error:".mysqli_error($conn);
	}
	$row = mysqli_fetch_array($result);
	
	$id_admin = $row["id_admin"];
	$name = $row["name"];
	$CIN = $row["CIN"];
	$gender = $row["gender"];
	$age = $row["age"];
	$tel = $row["tel"];
	$email = $row["email"];
		
		

?>

<div class="headerA">
	<h2>My Information</h2>
</div>
<form method="post" action="index3.php" class="info">

<div class="Dcontent">

	<label>ID: <?php echo $row['id_admin']; ?></label>

	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $row['name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> CIN : <?php echo $row['CIN']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Gender : <?php echo $row['gender']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Age  : <?php echo $row['age']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Phone number : <?php echo $row['tel']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $row['email']; ?></label>
	 	   	 	   <br>
	 	   <br>


</div>

</form>
</body>
</html>
<?php }?>