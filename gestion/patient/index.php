<?php 

session_start();

if(!isset($_SESSION['loginuser'])){
	header('location:loginP.php');
}else{
	
?>

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
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			<li><a href="deconnection.php">Logout</a></li>
			

		</ul>
	</nav>




</header>
<body >


<?php
	
	include("connection.php");
	$CIN = $_SESSION['loginuser'];
	$infouser = "SELECT * FROM patient WHERE CIN = '$CIN'";
	$result = mysqli_query($conn,$infouser);
	if (!$result) {
		echo "Error:".mysqli_error($conn);
	}
	$row = mysqli_fetch_array($result);
	
	$id_patient = $row["id_patient"];
	$name = $row["name"];
	$CIN = $row["CIN"];
	$gender = $row["gender"];
	$age = $row["age"];
	$tel = $row["tel"];
	$email = $row["email"];
		
		

?>


<div class="headerP" >
	<h2>My Information</h2>
</div>



<form method="post" action="index.php"  class="info">

   
<div class="Pcontent" style="text-align: center;">
	

		<table>

		   <tr>
		   	<td>ID</td>
		   	<td><?php echo $row['id_patient'];?></td>
		   </tr>
	 	   <tr>
	 	   	<td>Name</td>
	 	   	<td><?php echo $row['name']; ?></td>
	 	   </tr>
	 	   <tr>
	 	   	<td>CIN</td>
	 	   	<td><?php echo $row['CIN']; ?></td>
	 	   </tr>
	 	   <tr>
	 	   	<td>Gender</td>
	 	   	<td><?php echo $row['gender']; ?></td>
	 	   </tr>
	 	   <tr>
	 	   	<td>Age</td>
	 	   	<td><?php echo $row['age']; ?></td>
	 	   </tr>
	 	   <tr>
	 	   	<td>Phone number</td>
	 	   	<td><?php echo $row['tel']; ?></td>
	 	   </tr>
	 	   <tr>
	 	   	<td>Email</td>
	 	   	<td><?php echo $row['email']; ?></td>
	 	   </tr>
    		
	 	  </table>
	 	  
		
</div>
	 	
	 
</form>

<?php //} 
}
?>

</body>
</html>



