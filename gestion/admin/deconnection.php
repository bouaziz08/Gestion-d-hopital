<?php
	
	session_start();

	session_unset();  // vider les variables de sessions

	session_destroy();
	
		header('location:loginad.php');
	
	
?>