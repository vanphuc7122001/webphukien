<?php 


require_once '../config/connect.php';

// echo !isset($_SESSION['level']);
if(!isset($_SESSION['level'])){
	header('location:../index.php');
}
