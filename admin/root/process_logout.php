<?php 
	session_start();
	unset($_SESSION['id_admin']);
	unset($_SESSION['username']);
	unset($_SESSION['level']);

	// echo $_SESSION['id_admin'];
	// echo $_SESSION['username'];
	// echo $_SESSION['level'];
	header('location:../index.php');

 ?>