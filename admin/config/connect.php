<?php 

$connect = mysqli_connect('localhost','root','','webphukien');

if(!$connect){
	die("Connection failed: " . mysqli_connect_error());
}

// product catalog managementgit 