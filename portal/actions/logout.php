<?php 

	session_start();
	
	if (isset($_SESSION['user'])){
		session_unset($_SESSION['user']);
	}elseif (isset($_SESSION['firm'])){
		session_unset($_SESSION['firm']);
	}
	
	header ("location: ../index.php");

?>