<?php

include("connection.php");
if (isset($_POST['CIN']) && isset($_POST['password'])){ 
		$CIN = htmlspecialchars($_POST['CIN']);
		$password = htmlspecialchars($_POST['password']);
	
$login = "SELECT CIN,password FROM patient WHERE CIN='$CIN' and password='$password'" ;
$result = mysqli_query($conn,$login);
$count = mysqli_num_rows($result);

if ($count == 1) {
	session_start();
	$_SESSION['loginuser'] = $CIN;

	header('Location:index.php');
}else if (empty($_POST['CIN']) or empty($_POST['password'])){
  echo "<script>alert('Please complete the following')</script>";
  }else{
	//header('location:loginP.php');
  
  echo "<script>alert('Check the password or CIN')</script>";
}

	
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <p><a href="\host\html\index.html"><i class="fa-thin fa-arrow-left"></i>Back</a></p>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="CIN">
          <span></span>
          <label>CIN</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="createacount.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
