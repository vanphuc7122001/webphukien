<?php 
	unset($_SESSION['id_admin']);
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header('location:../index.php');

 ?>