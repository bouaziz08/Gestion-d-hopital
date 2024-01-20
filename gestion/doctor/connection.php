<?php
		/**********connection**********/

		$conn = mysqli_connect('localhost','root','','hospital');
		
	/*	session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['nCIN']) || empty($_POST['password']))
       {
            header("location:loginP.php?empty");
       }
       else
       {
            $query="select * from patient where nCIN ='".$_POST['nCIN']."' AND password = ".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['CIN']=$_POST['nCIN'];
                $_SESSION['password']=$_POST['password'];

                header("location:profilP.php");
            }
            else
            {
                header("location:loginP.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }



		/*try {
		$conn = new PDO("mysql:host=localhost;port=3306;dbname=hospital",'root','admin');
		} catch (exception $e){
			echo 'Erreur de connexion: ' . $e->getMessage();
		}
*	
	if (isset($_POST['nCIN']) && isset($_POST['password'])) {
	
		if (!empty($_POST['nCIN']) && !empty($_POST['password'])) {
			session_start();
			$_SESSION['CIN'] = htmlspecialchars($_POST['nCIN']);
			$_SESSION['password'] = htmlspecialchars($_POST['password']);
			if (password_verify($password, $CIN)) {
				header('location:profilP.php');
			}
			
		}
	}


	/*if(isset($_POST['CIN']) && isset($_POST['password'])){
		$CIN = $_POST['CIN'];
		$password = $_POST['password'];
		
		$sql = ("select * from patient where CIN = $CIN AND password = $password");
		$resultat = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($resultat);
		echo "$num ";
		if($num > 0){
			echo "correct log in";
		}else{
			echo "incorrect log in";
		}
		
		
	}
*/	

		/**********insertion**********

		if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pwd'])){
			if (!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
						
				$name = $_POST['name'];
				$date = $_POST['date'];
				$gender = $_POST['gender'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$pwd = $_POST['pwd'];

				$sql = "INSERT INTO Teacher(name,birth_date,gender,address,telephone,email,password) VALUES('$name','$date','$gender','$address','$phone','$email','$pwd');";
				$conn->exec($sql);
					echo 'added!!';
				}else{
					echo 'no added!!!';
			}

		}

		/**********select*********/

		/*$sql = $conn->query("SELECT * FROM Teacher");
		$sql -> execute(); 
		while($row = $sql->fetch()){
			echo $row['teacher_id'] . "<br>";
		}
		$sql->closeCursor();
		
		if(isset($_POST['teacher_id'])){
			if (!empty($_POST['teacher_id'])) {
				
				$teacher_id = htmlspecialchars($_POST['teacher_id']);

				$sql = $conn->prepare('SELECT * FROM Teacher WHERE teacher_id = ? ');
				$sql -> execute(array($teacher_id));

				echo '<table>';
				while ($row = $sql->fetch()) {
					echo '<tr>';
						echo '<td>';
		 					echo $row['teacher_id'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['name'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['telephone'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $row['address'];
	 					echo '</td>';

					echo '</tr>';
				}
				echo '</table>';
			}
		}
		/**********update**********
		if (isset($_POST['teacher_id']) && isset($_POST['name']) && isset($_POST['address'])) {
			if (!empty($_POST['teacher_id']) && !empty($_POST['name']) && !empty($_POST['address'])) {

				$teacher_id = htmlspecialchars($_POST['teacher_id']);
				$name = htmlspecialchars($_POST['name']);
				$address = htmlspecialchars($_POST['address']);

				if (filter_var($teacher_id,FILTER_VALIDATE_INT)) {
	
					$modify = $conn->prepare('UPDATE teacher SET name = :name, address = :address WHERE teacher_id = :teacher_id');
					$modify -> execute(array("name"=> $name, "address"=> $address, "teacher_id"=> $teacher_id));

					echo 'modify successfully';
				}else{
					echo 'modify failed';
				}
				
			}
		}
		/**********DELETE*********
		if (isset($_POST['teacher_id'])) {
			if (!empty($_POST['teacher_id'])) {
				
				$teacher_id = htmlspecialchars($_POST['teacher_id']);

				if (filter_var($teacher_id,FILTER_VALIDATE_INT)) {
					
					$delete = $conn ->prepare('DELETE FROM teacher WHERE teacher_id = ?');
					$delete -> execute(array($teacher_id));

					echo 'delete successfully';
				}else{
					echo 'delete failed';
				}

			}
		}**

		if (isset($_SESSION['CIN']) && isset($_SESSION['password'])) {
			if (!empty($_SESSION['CIN']) && !empty($_SESSION['password'])) {
				
				$CIN = htmlspecialchars($_SESSION['CIN']);
				$password = htmlspecialchars($_SESSION['password']);

				$log = $conn -> prepare("select * from patient where CIN ='$CIN' and password ='$password'");
				$log -> execute();
				$count = mysql_num_rows($result);

				if ($count == 1) {				
					echo "successfully login!!";
				}
				else{
					echo "incorrect login";
				}
			}
		}
		session_start();
		if(isset($_POST['login'])){
			$CIN = htmlspecialchars($_SESSION['CIN']);
			$password = htmlspecialchars($_SESSION['password']);
			$query = "select * from patient where CIN = '$CIN' && password = '$password'";
			
			if(mysql_num_rows(mysql_query($conn,$query))>0){
				$_SESSION['CIN'] = $CIN;
				header("location: patient.php");
			}else{
				echo "login incorrect";
			}
		}

*/
?>		