<?php
	
include("connection.php");
	if (isset($_POST['name']) && isset($_POST['CIN']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['tel']) && isset($_POST['email'])) {
		if (!empty($_POST['name']) && !empty($_POST['CIN']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['tel'])) {
			
			$name = htmlspecialchars($_POST['name']);
			$CIN = htmlspecialchars($_POST['CIN']);
			$password = htmlspecialchars($_POST['password']);
			$gender = htmlspecialchars($_POST['gender']);
			$age = htmlspecialchars($_POST['age']);
			$tel = htmlspecialchars($_POST['tel']);
			$email = htmlspecialchars($_POST['email']);

			$creer = $conn->prepare("INSERT INTO patient(name,CIN,password,gender,age,tel,email) VALUES('$name','$CIN','$password','$gender','$age','$tel','$email')");
			$creer -> execute();
				
		}
	}
		

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style1.css">
    
    <link rel="stylePsheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <title></title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="#" method="POST" name="valform" onsubmit=" return validation()">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input name="name" type="text" placeholder="Enter your name">
                            
                        </div>

                        <div class="input-field">
                            <label>CIN</label>
                            <input name="CIN" type="text" placeholder="Enter your CIN">
                            
                        </div>
                        <div class="input-field">
                            <label>password</label>
                            <input name="password" type="password" placeholder="Enter your password">
                            
                        </div>
                        <div class="input-field">
                            <label>Age</label>
                            <input name="age" type="text" placeholder="Enter your age">
                            
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" type="">
                                <option>Male</option>
                                <option>Female</option> 
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input name="tel" type="text" placeholder="Enter mobile number">
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input name="email" type="email" placeholder="Enter your email">
                            
                        </div>
                        
                    </div>
                </div>

                
                    

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText"><a href="loginP.php">Back</a></span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>