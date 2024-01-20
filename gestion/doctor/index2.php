<?php 

session_start();

if(!isset($_SESSION['loginadm'])){
	header('location:logindo.php');
}else{
	
?>
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
		
		<ul > 
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" listnurse.php">liste of nurse</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="deconnection.php">Logout</a></li>
			
		</ul>
		
	</nav>
</header>
<body >

<?php
	
	include("connection.php");
	$CIN = $_SESSION['loginadm'];
	$infouser = "SELECT * FROM doctor WHERE CIN = '$CIN'";
	$result = mysqli_query($conn,$infouser);
	if (!$result) {
		echo "Error:".mysqli_error($conn);
	}
	$row = mysqli_fetch_array($result);
	
	$id_doctor = $row["id_doctor"];
	$name = $row["name_doctor"];
	$CIN = $row["CIN"];
	$specialite = $row["specialite"];
	$gender = $row["gender"];
	$age = $row["age"];
	$tel = $row["tel"];
	
		
		

?>

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">

<div class="Dcontent">

	<label>ID: <?php echo $row['id_doctor']; ?></label>

	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $row['name_doctor']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> CIN : <?php echo $row['CIN']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialite : <?php echo $row['specialite']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Gender : <?php echo $row['gender']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Age  : <?php echo $row['age']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Phone number : <?php echo $row['tel']; ?></label>
	 	   	 	   
	 	   
	 	   

</div>

</form>
</body>
</html>
<?php }?>